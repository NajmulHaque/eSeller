<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function index($vendorId)
    {
        $vendorDetails  =   Vendor::join('business_categories','business_categories.id', '=', 'vendors.business_category_id')
            ->select('vendors.*','business_categories.name as categoryName')
            ->where('vendors.id','=',$vendorId)->get();
        $vendorProducts =   Vendor::rightJoin('vendor_products','vendor_products.vendor_id','vendors.id')
            ->join('products','products.id','=','vendor_products.product_id')
            ->select('products.*')
            ->where('vendors.id','=',$vendorId)->paginate(3);
        $totalVendorProducts    =   $vendorProducts->count();
        $vendorReviews  =   Vendor::join('vendor_reviews','vendor_reviews.vendor_id','=','vendors.id')
            ->leftjoin('users','users.id','vendor_reviews.user_id')
            ->select('vendor_reviews.rating','vendor_reviews.comments','vendor_reviews.created_at','users.name','users.avatar','users.id')
            ->where('vendors.id','=',$vendorId)->paginate(2);
        $totalVendorReview  =   $vendorReviews->count();
        return view('frontend.vendor-dashboard')->with([
            'vendorDetails' => $vendorDetails,
            'vendorProducts' => $vendorProducts,
            'totalVendorProducts' => $totalVendorProducts,
            'vendorReviews' =>  $vendorReviews,
            'totalVendorReview' => $totalVendorReview,
        ]);
        
    }
}
