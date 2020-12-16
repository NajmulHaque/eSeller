@extends('layouts.default')
@section('title','Shop')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
    <section class="breadcrumb-section set-bg"  style="background-color: #ffbf00">
        <div class="container-fluid p-4">
            <div class="row">
                <div class="col-lg-6 col-md-6 pl-5">
                    <a href="/">Home</a>
                    <i class="fa fa-chevron-right breadcrumb-separator"></i>
                    <span><a href="{{route('shop.index')}}">Shop</a></span>
                    <i class="fa fa-chevron-right breadcrumb-separator"></i>
                    <span></span>
                </div>
                <div class="col-md-6 col-lg-6 text-right">
                    <form action="{{ route('search') }}" method="GET" class="search-form">
                        <i class="fa fa-search search-icon" style="position: absolute; left: 363px;top: 14px;"></i>
                        <input style="padding: 5px 50px 5px 35px;" type="text" name="query" id="query" value="{{ request()->input('query') }}" class="search-box" placeholder="Search for product" required>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Category</h4>
                            <ul>
                                @foreach ($categories as $category)
                                    <li class="{{$category->slug}}"><a href="{{ route('shop.index', ['category' => $category->slug]) }}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select name="" id="">
                                        <option value="0">Default</option>
                                        <option value="1">name</option>
                                        <option value="2">price</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>{{$totalProducts}}</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span><i class="fa fa-bars"></i></span>
                                    <span><i class=""></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @forelse ($products as $product)
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ $product->image }}">
                                        <ul class="product__item__pic__hover">
                                            <li>
                                                <a href="#">
                                                <i class="fa fa-heart"></i>
                                                {{-- <form action="{{route('wishlist.store')}}" id="contact_form" method="POST">
                                                    @csrf
                                                    <input name="user_id" type="hidden" value="{{Auth::user()->id}}" />
                                                    <input name="product_id" type="hidden" value="{{$product->id}}" />
                                                    <button title="add to heart" id="product-cart-btn">
                                                        <i title="add to heart" class="fa fa-heart"></i>
                                                    </button>
                                                  </form> --}}
                                               </a>
                                            </li>
                                            <li><a href="{{ route('shop.product',$product->id) }}"><i class="fa fa-retweet"></i></a></li>
                                            <li>
                                                <form action="{{ route('cart.store') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                                    <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                                    <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                                                    <input type="hidden" value="{{ $product->details }}" id="details"
                                                        name="details">
                                                    <input type="hidden" value="{{ $product->image }}" id="img" name="img">
                                                    <input type="hidden" value="{{ $product->slug }}" id="slug" name="slug">
                                                    <input type="hidden" value="1" id="quantity" name="quantity">
                                                    <button title="add to cart" id="product-cart-btn">
                                                        <i title="add to cart" class="fa fa-shopping-cart"></i>
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="#">{{ $product->name }} {{ $product->details}}</a></h6>
                                        <h5>৳{{ $product->price }}</h5>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div style="text-align: left">No items found</div>
                        @endforelse
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection