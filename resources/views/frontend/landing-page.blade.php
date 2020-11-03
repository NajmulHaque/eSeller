@extends('layouts.default')
@section('styles')
<style>
    .latest-product__item__pic img {
        width: 110px !important;
        height: 100px !important;
    }

    .blog__item__pic img {
        height: 220px;
    }

    a:hover {
        color: black;
    }
    .carousel-inner h4 {
    font-weight: 700;
    color: #1c1c1c;
    margin-bottom: 45px;
}
.carousel-control-prev-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='black' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
}

.carousel-control-next-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='black' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
}
#product-custom-category{}
</style>
@endsection
@section('content')
<div class="info-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="product-categories">
                    <div class="card">
                        <div class="all-product-categories">
                            <i class="fas fa-bars"></i><span class="mx-3">All Categories</span>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="category-option">
                            <ul>
                                @foreach ($categories as $item)
                                    <li><a href="#">{{$item->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="product-search">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="info-search">
                                <div class="info-search-form">
                                    <form action="">
                                        <div class="search-categories">
                                            <p>All Categories</p><span><i class="fas fa-angle-down"></i></span>
                                        </div>
                                        <div class="search-box">
                                            <input type="text" name="search" placeholder="type your product name">
                                            <button style="background-color: #FFA500" type="submit"
                                                class="btn">search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info-contact">
                                <div class="contact-icon"><i class="fa fa-phone"></i></div>
                                <div class="contact-number">
                                    <p>+88017000000</p><span>24/7 support</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-slide" style="margin-left: 5%">
                    <div class="slide-content">
                        <!--                         <span>FRUIT FRESH</span>
                        <h2>Vegetable <br />100% Organic</h2>
                        <p style="color: #fff">Free Pickup and Delivery Available</p>
                        <a href="#" class="primary-btn">SHOP NOW</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div id="categories" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#categories" data-slide-to="0" class="active"></li>
            <li data-target="#categories" data-slide-to="1"></li>
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-lg-3">
                            <div class="categories__item set-bg"
                                data-setbg="{{asset('images/product-pictures/Fruits/Apple.jpg')}}">
                                <h5><a href="#">Fresh Fruit</a></h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="categories__item set-bg"
                                data-setbg="{{asset('images/product-pictures/Meat/Local-Chicken-Deshi-Murgi.jpg')}}">
                                <h5><a href="#">Fresh Meat</a></h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="categories__item set-bg"
                                data-setbg="{{asset('images/product-pictures/Vegetables/Gourd.jpg')}}">
                                <h5><a href="#">Fresh Vegetables</a></h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="categories__item set-bg"
                                data-setbg="{{asset('images/product-pictures/Fish/Hilsha-Fish.jpg')}}">
                                <h5><a href="#">Fresh Fish</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-lg-3">
                            <div class="categories__item set-bg"
                                data-setbg="{{asset('images/product-pictures/Spinach/Pui-Shak.jpg')}}">
                                <h5><a href="#">Spinach </a></h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="categories__item set-bg"
                                data-setbg="{{asset('images/product-pictures/Fruits/Apple.jpg')}}">
                                <h5><a href="#">Fresh Fruit</a></h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="categories__item set-bg"
                                data-setbg="{{asset('images/product-pictures/Meat/Local-Chicken-Deshi-Murgi.jpg')}}">
                                <h5><a href="#">Fresh Meat</a></h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="categories__item set-bg"
                                data-setbg="{{asset('images/product-pictures/Vegetables/Gourd.jpg')}}">
                                <h5><a href="#">Fresh Vegetables</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#categories" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#categories" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".fruits">Fresh Fruits</li>
                        <li data-filter=".fresh-meat">Fresh Meat</li>
                        <li data-filter=".vegetables">Fresh Vegetables</li>
                        <li data-filter=".fish">Fresh Fish</li>
                        <li data-filter=".spinach">Spinach (shak)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix fruits">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('images/product-pictures/Fruits/Grapes.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Grape</a></h6>
                        <h5>৳30.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix fruits">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('images/product-pictures/Fruits/Guava.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Guava</a></h6>
                        <h5>৳30.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix fish">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('images/product-pictures/Fish/Prawn-Big.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Banana</a></h6>
                        <h5>৳30.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix fruits">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('images/product-pictures/Fruits/Pomegranate.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Pomegranate</a></h6>
                        <h5>৳30.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('images/product-pictures/Vegetables/Gourd.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Pineapple</a></h6>
                        <h5>৳30.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix fruits">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('images/product-pictures/Fruits/Grapes-Red.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Grapes Red</a></h6>
                        <h5>৳30.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('images/product-pictures/Meat/Beef.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Green Apple</a></h6>
                        <h5>৳30.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix spinach">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('images/product-pictures/Spinach/Kolmi-Shak.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Mango</a></h6>
                        <h5>৳20.00</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container" id="product-custom-category">
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div id="latest-product" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <h4>Latest Products</h4>
                    <div class="carousel-item active">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Spinach/Kolmi-Shak.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Kolmi Shak</h6>
                                    <span>৳15.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Meat/Beef.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Beef</h6>
                                    <span>৳600.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Vegetables/Tomato.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Tomato</h6>
                                    <span>৳130.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Fish/Prawn-Big.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Prawn Big</h6>
                                    <span>৳450.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Fish/Prawn-Big.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>৳30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Fruits/Malta.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Malta</h6>
                                    <span>৳170.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div id="top-rated-product" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <h4>Top Rated Products</h4>
                    <div class="carousel-item active">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Spinach/Kochi-Data-Shak.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Kochi Data Shak</h6>
                                    <span>৳25.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Fish/Prawn-Big.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Prawn Big</h6>
                                    <span>৳450.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Fruits/Malta.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Malta</h6>
                                    <span>৳170.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Spinach/Kolmi-Shak.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Kolmi Shak</h6>
                                    <span>৳15.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Meat/Beef.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Beef</h6>
                                    <span>৳600.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Vegetables/Tomato.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Tomato</h6>
                                    <span>৳130.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div id="latest-product" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <h4>Review Products</h4>
                    <div class="carousel-item active">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Fish/Tengra-Fish.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Tengra Fish</h6>
                                    <span>৳600.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Vegetables/Ash-Gourd.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Ash Gourd</h6>
                                    <span>৳30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Fruits/Boroi.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Boroi</h6>
                                    <span>৳150.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Fish/Prawn-Big.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Prawn Big</h6>
                                    <span>৳450.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Fish/Prawn-Big.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>৳30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('images/product-pictures/Fruits/Malta.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Malta</h6>
                                    <span>৳170.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{asset('images/product-pictures/Vegetables/Ladies-Finger.jpg')}}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2020</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Cooking tips make cooking simple</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{asset('images/product-pictures/Fruits/Banana.jpg')}}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> June 14,2020</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{asset('images/product-pictures/Vegetables/Lemon.jpg')}}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> September 4,2010</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Visit the clean farm in the US</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')

@endsection