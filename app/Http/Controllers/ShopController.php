<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\VendorProduct;
use App\Models\ProductReview;
use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $pagination = 8;
        $limit=3;
        $categories = Category::all();
        // $products   = Product::paginate($pagination); 
        // $products   = Product::all()->random(6);
        if (request()->category) {
            $products = Product::join('category','category.id','=','products.category_id')
                ->select('products.*')->where('category.slug','=',request()->category)
                ->paginate($pagination);
            $totalProducts = $products->count();
            $categoryName = optional($categories->where('slug','=', request()->category)->first())->name;
        } else {
            $products = Product::inRandomOrder($pagination)->paginate($pagination);
            $totalProducts = $products->count();
            $categoryName = 'Featured';
        }
        $latestProducts = Product::orderBy('created_at', 'desc')->limit($limit)->get()->random($limit);
        return view('frontend.shop', compact('categories','products','totalProducts','latestProducts','categoryName'));
    }
    public function product($id)
    {
        $mightAlsoLike = Product::where('id', '!=', $id)->inRandomOrder()->take(4)->get();
        $productDetails    =   Product::find($id);
        $productReviews  =   Product::join('product_reviews','product_reviews.product_id', '=', 'products.id')
            ->leftJoin('users','users.id', '=', 'product_reviews.user_id')
            ->select('product_reviews.rating','product_reviews.comments','users.name', 'users.avatar','products.details')
            ->where('product_reviews.product_id','=',$id)->get();
        $totalProductReviews    =   $productReviews->count();
        $productVendors  =   VendorProduct::leftJoin('products','products.id', '=', 'vendor_products.product_id' )
            ->join('vendors','vendors.id','=','vendor_products.vendor_id')
            ->select('vendors.*')
            ->where('products.id', '=', $id)->get();
        return view('frontend.product')
               ->with([
                   'productDetails' => $productDetails,
                   'productVendors'  =>  $productVendors,
                   'mightAlsoLike'  =>  $mightAlsoLike,
                   'productReviews' =>  $productReviews,
                   'totalProductReviews' => $totalProductReviews,
               ]);
    }
    public function cart()
    {
        $mightAlsoLike = Product::inRandomOrder()->take(4)->get();
        return view('frontend.cart')->with([
            'mightAlsoLike' =>  $mightAlsoLike,
        ]);
    }
    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);
        $query = $request->input('query');
        $products = Product::search($query)->paginate(10);

        return view('frontend.search-results')->with([
            'products'=> $products,
        ]);
    }
    public function vendorSearch(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);
        $query = $request->input('query');
        $vendors = Vendor::search($query)->paginate(10);

        return view('frontend.search-vendor-results')->with([
            'vendors' => $vendors,
        ]);
    }
}
