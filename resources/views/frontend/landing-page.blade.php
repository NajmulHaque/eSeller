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
    .nice-select { border: none}
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
                                @foreach ($categories as $category)
                                    <li class="{{$category->slug}}"><a href="{{ route('shop.index', ['category' => $category->slug]) }}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="info-search">
                                <div class="info-search-form">
                                    <form action="{{ route('search') }}" method="GET">
                                        <div class="search-box">
                                            <select name="" id="category-select">
                                                <option value="">All Categories</option>
                                                @foreach ($categories as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                            <input type="text" name="query" placeholder="type your product name">
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
                        @forelse ($slideCategories as $item)
                        <div class="col-md-3 col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{$item->image}}">
                                <h5><a href="{{ route('shop.index', ['category' => $item->slug]) }}">{{$item->name}}</a></h5>
                            </div>
                        </div>
                        @empty
                        <div>No data found</div>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row align-items-center">
                        @forelse ($slideCategories2 as $item)
                        <div class="col-md-3 col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{$item->image}}">
                                <h5><a href="/shop">{{$item->name}}</a></h5>
                            </div>
                        </div>
                        @empty
                        <div>No data found</div>
                        @endforelse
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
                        @foreach ($categories as $category)
                        <li data-filter=".{{ $category->slug }}">{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach ($categoryProducts as $categoryProduct)
            <div class="col-lg-3 col-md-4 col-sm-6 mix {{$categoryProduct->slug}}" style="display: ">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{$categoryProduct->image}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="{{ route('shop.product',$categoryProduct->id) }}">
                                    <i class="fa fa-retweet"></i></a>
                            </li>
                            <li>
                                <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $categoryProduct->id }}" id="id" name="id">
                                    <input type="hidden" value="{{ $categoryProduct->name }}" id="name" name="name">
                                    <input type="hidden" value="{{ $categoryProduct->price }}" id="price" name="price">
                                    <input type="hidden" value="{{ $categoryProduct->details }}" id="details"
                                        name="details">
                                    <input type="hidden" value="{{ $categoryProduct->image }}" id="img" name="img">
                                    <input type="hidden" value="{{ $categoryProduct->slug }}" id="slug" name="slug">
                                    <input type="hidden" value="1" id="quantity" name="quantity">
                                    <button title="add to cart" id="product-cart-btn">
                                        <i title="add to cart" class="fa fa-shopping-cart"></i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">{{$categoryProduct->name}} {{$categoryProduct->details}}</a></h6>
                        <h5>৳{{$categoryProduct->price}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $categoryProducts->links()}}
    </div>
</section>

<div class="container" id="product-custom-category">
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div id="latest-product" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <h4>Latest Products</h4>
                    <div class="carousel-item active">
                        @foreach ($latestProducts as $latestproduct)
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ $latestproduct->image }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $latestproduct->name}} {{ $latestproduct->details}}</h6>
                                    <span>৳{{ $latestproduct->price}}</span>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="carousel-item">
                        <div class="latest-prdouct__slider__item">
                            @foreach ($latestProducts as $latestProduct)
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ $latestProduct->image}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $latestProduct->name }} {{ $latestproduct->details}}</h6>
                                    <span>৳{{ $latestProduct->price }}</span>
                                </div>
                            </a>
                            @endforeach
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
                            @foreach ($topRatedProducts as $topRatedProduct)
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ $topRatedProduct->image}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $topRatedProduct->name }} {{ $topRatedProduct->details }}</h6>
                                    <span>৳{{ $topRatedProduct->price}}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="latest-prdouct__slider__item">
                            @foreach ($topRatedProducts as $topRatedProduct)
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ $topRatedProduct->image}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $topRatedProduct->name }} {{ $topRatedProduct->details }}</h6>
                                    <span>৳{{ $topRatedProduct->price}}</span>
                                </div>
                            </a>
                            @endforeach
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
                            @foreach ($reviewProducts as $reviewProduct)
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{$reviewProduct->image}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{$reviewProduct->name}} {{$reviewProduct->details}}</h6>
                                    <span>৳{{$reviewProduct->price}}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="latest-prdouct__slider__item">
                            @foreach ($reviewProducts as $reviewProduct)
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{$reviewProduct->image}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{$reviewProduct->name}} {{$reviewProduct->details}}</h6>
                                    <span>৳{{$reviewProduct->price}}</span>
                                </div>
                            </a>
                            @endforeach
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

<script>
    $(document).ready(function () {
        $('#car').on('click',function () {
            $('.car').show();
            $('.bus').hide();
            $('.van').hide();
            $(this).addClass('active');
            $("#van").removeClass('active');
            $("#bus").removeClass('active');
        });
        $('#van').on('click',function () {
            $('.car').hide();
            $('.bus').hide();
            $('.van').show();
            $("#van").addClass('active');
            $("#car").removeClass('active');
            $("#bus").removeClass('active');
        });
        $('#bus').on('click',function () {
            $('.car').hide();
            $('.bus').show();
            $('.van').hide();
            $("#bus").addClass('active');
            $("#car").removeClass('active');
            $("#van").removeClass('active');
        });
    });
</script>
@endsection