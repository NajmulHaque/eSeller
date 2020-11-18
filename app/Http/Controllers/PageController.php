<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\OrderProduct;
use App\Models\ProductReview;
use App\Models\Contact;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function landingPage()
    {
        $pagination =4;
        $limit=3;
        $categoryProductLimit   =   4;
        $categories = Category::all();
        $slideCategories = Category::all()->random($pagination);;
        $slideCategories2 = Category::all()->random($pagination);
        $categoryProducts   =   Category::join('products','products.category_id', '=', 'category.id')
            ->select('category.slug','products.name','products.id','products.price','products.image','products.details')
            ->inRandomOrder($categoryProductLimit)->paginate($categoryProductLimit);
        $categoryProducts1  =   Product::where('products.category_id', '=', 5)->get();
        $latestProducts = Product::orderBy('created_at', 'desc')->limit($limit)->get()->random($limit);
        $topRatedProducts = Product::with('sales')
            ->leftJoin('order_products','products.id','=','order_products.product_id')
            ->selectRaw('products.name, products.price, products.image, products.details, COALESCE(sum(order_products.item_count),0) total')
            ->groupBy('products.id')->orderBy('total','desc')->take($limit)->get();
        $reviewProducts = Product::whereHas('reviews',function($query){return $query->where('status',true);})->paginate($limit);
            // ->join('product_reviews', 'product_reviews.product_id', '=','products.id')->take($limit)->get();
        return view('frontend.landing-page')->with([
            'categories'=> $categories, 
            'slideCategories' => $slideCategories,
            'slideCategories2' => $slideCategories2,
            'categoryProducts' => $categoryProducts,
            'latestProducts'   => $latestProducts,
            'topRatedProducts'  => $topRatedProducts,
            'reviewProducts' =>  $reviewProducts,
            'categoryProducts1' => $categoryProducts1,
        ]);
    }

    public function contact()
    {
    	return view('frontend.contact');
    }
    public function contactForm(Request $request)
    {
        $message    =   $request->all();
        $contact = new Contact;
        if (auth()->user()) {
            $contact->user_id = auth()->user()->id;
        }
        $contact->name  = $request->name;
        $contact->email  = $request->email;
        $contact->phone  = $request->phone;
        $contact->message  = $request->message;
        $contact->save();
        return back()->with('modal','true');
        
    }
    public function vendor()
    {
        return view('frontend.vendor-dashboard');
    }
}
