@extends('layouts.default')
@section('title','Product')
@section('styles')
<style>
    a:hover {
        color: black
    }

    #product-vendor p {
        font-size: 13px
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
<div class="container-fluid p-4" style="background-color: #ffbf00">
    <div class="row">
        <div class="col-md-6 col-lg-6 pl-5">
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span><a href="{{route('shop.index')}}">Shop</a></span>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span><a href="#">Product</a></span>
        </div>
        <div class="col-md-6 col-lg-6 text-right">
            <form action="{{ route('vendor-search') }}" method="GET" class="search-form">
                <i class="fa fa-search search-icon" style="position: absolute; left: 363px;top: 14px;"></i>
                <input style="padding: 5px 50px 5px 35px;" type="text" name="query" id="query" value="{{ request()->input('query') }}" class="search-box" placeholder="Area Search for Vendor" required>
            </form>
        </div>
    </div>
</div>
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img height="300px" style="min-width: 80% !important" class="product__details__pic__item--large"
                            src="{{asset($productDetails->image)}}" alt="">
                    </div>
                    <div>
                        <img width="100px" height="100px" src="{{asset($productDetails->image)}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>{{$productDetails->name}}</h3>
                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <span>({{$totalProductReviews}} reviews)</span>
                    </div>
                    <div class="product__details__price">৳ {{$productDetails->price}}</div>
                    <ul>
                        <li><b>Availability</b> <span>In Stock</span></li>
                        <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                        <li><b>Weight</b> <span>{{$productDetails->details}}</span></li>
                    </ul>
                    <div class="row">
                        <form action="{{ route('cart.store') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $productDetails->id }}" id="id" name="id">
                            <input type="hidden" value="{{ $productDetails->name }}" id="name" name="name">
                            <input type="hidden" value="{{ $productDetails->price }}" id="price" name="price">
                            <input type="hidden" value="{{ $productDetails->details }}" id="details" name="details">
                            <input type="hidden" value="{{ $productDetails->image }}" id="img" name="img">
                            <input type="hidden" value="{{ $productDetails->slug }}" id="slug" name="slug">
                            <input type="hidden" value="1" id="quantity" name="quantity">
                            <button style="text-transform: uppercase" class="btn btn-info btn-md" class="tooltip-test" title="add to cart">
                                <i class="fa fa-shopping-cart pr-3" style="font-size: 20px"></i> add to cart
                            </button>
                        </form>
                    </div>
                    {{-- <a href="{{ route('cart.index') }}" class="primary-btn" style="text-transform: uppercase">add
                    to
                    cart</a> --}}
                </div>
            </div>
            <div class="col-md-5 col-lg-5 product__details__tab">
                <div id="product-vendor" style="background-color: #f5f5f5;">
                    <h4 class="py-3 text-center" style="background-color: rgb(255, 191, 0);">Product Vendors</h4>
                    <ul style="list-style-type: none;padding-top: 10px" style="">
                        @forelse ($productVendors as $productVendor)
                        <li>
                            <a href="{{ route('vendor-dashboard',$productVendor->id) }}">
                                <img width="80px" height="80px" src="{{asset($productVendor->avatar)}}">
                            </a>
                            <span class="pl-5">
                                @for ($i = 1; $i < 6; $i++) <i
                                    class="fa fa-star{{($i<=$productVendor->rating) ? '':'No rating found'}}"></i>
                                    @endfor
                            </span>
                            <p class="pl-3">{{$productVendor->name}}</p>
                        </li>
                        <hr>
                        @empty
                        <div class="text-center">
                            <h5 class="text-danger font-weight-bold">No Vendors Found Yet!</h5>
                        </div>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')

@endsection