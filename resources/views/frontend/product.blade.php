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
            <span><a href="">Shop</a></span>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span></span>
        </div>
        <div class="col-md-6 col-lg-6 text-right">
            <i class="fa fa-search" style="position: absolute; left: 340px;top: 14px;"></i>
            <input style="padding: 5px 50px 5px 35px;" type="search" name="" id="" placeholder="Search for vendor">
        </div>
    </div>
</div>
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img height="300px" style="min-width: 85% !important" class="product__details__pic__item--large"
                            src="{{asset('images/product-pictures/Vegetables/Onion.jpg')}}" alt="">
                    </div>
                    <div>
                        <img width="100px" height="100px"
                            data-imgbigurl="{{asset('images/product-pictures/Vegetables/Tomato.jpg')}}"
                            src="{{asset('images/product-pictures/Vegetables/Onion.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>Onion</h3>
                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <span>(18 reviews)</span>
                    </div>
                    <div class="product__details__price">৳ 50.00</div>
                    <ul>
                        <li><b>Availability</b> <span>In Stock</span></li>
                        <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                        <li><b>Weight</b> <span>1 kg</span></li>
                    </ul>
                    <div class="product__details__quantity">
                        {{-- <div class="quantity">
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div> --}}
                        <input type="number" class="form-control text-center py-4" value="1">
                    </div>
                    <a href="{{ route('shop.cart') }}" class="primary-btn" style="text-transform: uppercase">add to
                        cart</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 px-5">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                aria-selected="false">Reviews <span>(1)</span></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Products Description</h6>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore facilis adipisci
                                    voluptate fuga accusantium mollitia suscipit cupiditate amet officia quibusdam,
                                    laudantium ea praesentium, nihil rerum in. Quis asperiores voluptas aliquid.</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <ul style="list-style-type: none">
                                    <li>
                                        <a href="{{ route('vendor-dashboard') }}">
                                            <img width="80px" height="80px" src="{{asset('images/user2.jpg')}}">
                                        </a>
                                        <span>
                                            <i class="fa fa-star-half-o" style="font-size: 20px"></i><i
                                                class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i
                                                class="fa fa-star checked"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </span>
                                        <p>Mr. Nurul</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 col-lg-5 product__details__tab">
                <div id="product-vendor" style="background-color: #f5f5f5;">
                    <h4 class="py-3 text-center" style="background-color: rgb(255, 191, 0);">Product Vendors</h4>
                    <ul style="list-style-type: none" style="">
                        <li>
                            <a href="{{ route('vendor-dashboard') }}">
                                <img width="80px" height="80px" src="{{asset('images/user2.jpg')}}">
                            </a>
                            <span>
                                <i class="fa fa-star-half-o" style="font-size: 20px"></i><i
                                    class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i
                                    class="fa fa-star checked"></i><i class="fa fa-star"></i>
                            </span>
                            <p class="pl-3">Mr. Nurul</p>
                        </li>
                        <li>
                            <a href="{{ route('vendor-dashboard') }}">
                                <img width="80px" height="80px" src="{{asset('images/user2.jpg')}}">
                            </a>
                            <span>
                                <i class="fa fa-star-half-o" style="font-size: 20px"></i><i
                                    class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i
                                    class="fa fa-star checked"></i>
                            </span>
                            <p class="pl-3">Mr. Issac</p>
                        </li>
                        <li>
                            <a href="{{ route('vendor-dashboard') }}">
                                <img width="80px" height="80px" src="{{asset('images/user2.jpg')}}">
                            </a>
                            <span>
                                <i class="fa fa-star-half-o" style="font-size: 20px"></i><i
                                    class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i
                                    class="fa fa-star checked"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </span>
                            <p class="pl-3">Mr. Sahed</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>You might also like...</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{asset('images/product-pictures/Vegetables/Gourd.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Gourid</a></h6>
                        <h5>৳35.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{asset('images/product-pictures/Fish/Prawn-Big.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">prawn Big</a></h6>
                        <h5>৳630.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{asset('images/product-pictures/Fruits/Apple.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Apple</a></h6>
                        <h5>৳170.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{asset('images/product-pictures/Meat/Local-Chicken-Deshi-Murgi.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Deshi Murgi</a></h6>
                        <h5>৳140.00</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')

@endsection