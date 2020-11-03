<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landingPage()
    {
        $categories = Category::all();
        return view('frontend.landing-page')->with(['categories'=> $categories]);
    }

    public function contact()
    {
    	return view('frontend.contact');
    }
    public function vendor()
    {
        return view('frontend.vendor-dashboard');
    }
}
