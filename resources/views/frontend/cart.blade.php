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
<section class="breadcrumb-section py-3" style="background-color: rgb(255, 191, 0)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Cart</h2>
                    <div class="breadcrumb__option">
                        <a href="{{route('shop.index')}}">Shop</a>
                        <span>Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 pb-5 text-center">
                @if (\Cart::getTotalQuantity() > 0)
                <h4><strong>{{ \Cart::getTotalQuantity()}}</strong> Product(s) In Your Cart</h4>
                @else
                <h4>No Product(s) In Your Cart</h4><br>
                <a href="{{route('shop.index')}}" class="btn btn-dark">Continue Shopping</a>
                @endif
            </div>
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cartDetails as $item)
                            <tr>
                                <td class="shoping__cart__item">
                                    <img width="50px" src="{{asset($item->attributes->image)}}" alt="">
                                    <h5>{{$item->name}}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    ৳{{$item->price}}
                                </td>
                                <td class="shoping__cart__quantity pl-5 pt-5">
                                    <div class="quantity">
                                        <form action="{{ route('cart.update') }}" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                                                <input type="number" class="form-control form-control-sm"
                                                    value="{{ $item->quantity }}" id="quantity" name="quantity"
                                                    style="width: 70px; margin-right: 10px;">
                                                <button class="btn btn-secondary btn-sm"
                                                    style="margin-right: 25px;"><i class="fa fa-hand-pointer"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    ৳{{ \Cart::get($item->id)->getPriceSum() }}
                                </td>
                                <td class="">
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                        <button class="btn btn-dark btn-sm" style="margin-right: 10px;"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div>No Product Found Yet</div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="/" class="primary-btn cart-btn" style="background-color: #7fad39;color: #fff;float: right;">CONTINUE SHOPPING</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Discount Codes</h5>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">APPLY COUPON</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        @if(count($cartDetails)>0)
                        <li>Subtotal <span>৳{{ \Cart::getSubTotal() }}</span></li>
                        <li>Total <span>৳{{ \Cart::getTotal() }}</span></li>
                        @endif
                    </ul>
                    <a href="{{route('checkout.index')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.might-like')
@endsection
@section('scripts')

@endsection