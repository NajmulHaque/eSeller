<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderProduct;
use App\Models\Mail\OrderPlaced;
use Illuminate\Support\Facades\Mail;
use Darryldecode\Cart\CartCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Darryldecode\Cart\CartCollection;
use Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
{
    public function index()
    {
        if (\Cart::getContent()->count() == 0) {
            return redirect()->route('shop.index');
        }
        $cartDetails    =   \Cart::getContent();
        return view('frontend.checkout')->with([
            'cartDetails'   =>   $cartDetails,
        ]);
    }
    public function store(Request $request)
    {
        // Check race condition when there are less items available to purchase
        if ($this->productsAreNoLongerAvailable()) {
            return back()->withErrors('Sorry! One of the items in your cart is no longer avialble.');
        }

        try {
            if ($request->create_account) {
                $user  = $this->addToUsersTables($request);
            }else {
                $user = auth()->user()->id;
            }
            
            $order = $this->addToOrdersTables($request, $user, null);
            // Mail::send(new OrderPlaced($order));

            // decrease the quantities of all the products in the cart
            $this->decreaseQuantities();

            \Cart::clear();
            // dd($request->toArray());
            session()->forget('coupon');
            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {
            $this->addToUsersTables($request, $e->getMessage());
            $this->addToOrdersTables($request, $e->getMessage());
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }
    protected function addToUsersTables($request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'role_id' => 2,
            'password' => Hash::make($request->password),
        ]);
        return $user;
    }    
    protected function addToOrdersTables($request, $user ,$error)
    {
        // Insert into orders table
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : $user->id,
            'billing_email' => $request->email,
            'billing_name' => $request->name,
            'billing_address' => $request->address,
            'billing_city' => $request->city,
            'billing_phone' => $request->phone,
            'billing_name_on_card' => $request->name,
            'billing_subtotal' => getNumbers()->get('newSubtotal'),
            'billing_tax' => getNumbers()->get('newTax'),
            'billing_total' => getNumbers()->get('newTotal'),
            'payment_gateway' => $request->payment_type,
            'error' => $error,
        ]);

        // Insert into order_product table
        foreach (\Cart::getContent() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'quantity' => $item->quantity,
            ]);
        }

        return $order;
    }
    protected function decreaseQuantities()
    {
        foreach (\Cart::getContent() as $item) {
            $product = Product::find($item->id);

            $product->update(['quantity' => $product->quantity - $item->quantity]);
        }
    }
    protected function productsAreNoLongerAvailable()
    {
        foreach (\Cart::getContent() as $item) {
            $product = Product::find($item->id);
            if ($product->quantity < $item->quantity) {
                return true;
            }
        }

        return false;
    }
}
