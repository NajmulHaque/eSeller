@extends('layouts.default')
@section('styles')
<style>
    .home {
        color: #7fad39 !important;
        font-weight: bold;
    }
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

    .nice-select {
        border: none
    }
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
                                <li class="{{$category->slug}}"><a
                                        href="{{ route('shop.index', ['category' => $category->slug]) }}">{{$category->name}}</a>
                                </li>
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
{{-- <div class="container pt-5" id="product-custom-category">
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
</div> --}}
@endsection
@section('scripts')
<script>
    $(document).ready(function () {
        $(".nav-item a").click(function(){
            $(this).addClass("highlight-home");
        }); 
    });
</script>
@endsection