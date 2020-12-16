<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Darryldecode\Cart\CartCondition;

class CartController extends Controller
{
    public function cart()
    {

        $mightAlsoLike = Product::inRandomOrder()->take(4)->get();
        $cartDetails    =   \Cart::getContent();
        // dd($cartDetails);
        return view('frontend.cart')->with([
            'cartDetails' => $cartDetails,
            'mightAlsoLike' => $mightAlsoLike,
        ]);
    }
    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item is Added to Cart!');
    }
    public function addCondition()
    {
        $condition = new CartCondition(array(
            'name' => 'VAT 12.5%',
            'type' => 'tax',
            'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '12.5%',
            'attributes' => array( // attributes field is optional
                'description' => 'Value added tax',
                'more_data' => 'more data here'
            )
        ));
        \Cart::condition($condition);
        return response(array(
            'success' => true,
            'data' => $cartCondition,
            'message' => "condition added."
        ),201,[]);
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        // \Cart::session($request->id)->remove('id');
        // \Cart::clear($request->id);
        return redirect()->route('cart.index')->with('message', 'Item is removed!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }
    public function clear(){
        \Cart::clear();
        return redirect()->route('cart')->with('success_msg', 'Car is cleared!');
    }
}
