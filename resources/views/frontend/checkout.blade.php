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
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form action="{{ route('checkout.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        @if (auth()->user())
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Name<span>*</span></p>
                                    <input type="text" id="name" name="name" value="{{ auth()->user()->name }}"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text" id="phone" name="phone" value="{{ auth()->user()->phone }}"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input id="email" name="email" type="email" value="{{ auth()->user()->email }}"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input id="address" name="address" type="text" value="{{ auth()->user()->address }}"
                                readonly>
                        </div>
                        <div class="checkout__input">
                            <p>City<span>*</span></p>
                            <input id="city" name="city" type="text" value="{{ auth()->user()->city }}" readonly>
                        </div>
                        @else
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Name<span>*</span></p>
                                    <input type="text" name="name" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text" name="phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" name="address" placeholder="Area, Street, Apartment, Unite">
                        </div>
                        <div class="checkout__input">
                            <p>Town/City<span>*</span></p>
                            <input type="text" name="city">
                        </div>
                        <div class="checkout__input__checkbox">
                            <label for="acc">
                                Create an account?
                                <input type="checkbox" name="create_account" value="yes" id="acc">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <p>Create an account by entering the information below. If you are a returning customer
                            please login at the top of the page</p>
                        <div class="checkout__input">
                            <p>Account Password<span>*</span></p>
                            <input type="password" name="password">
                        </div>
                        <div class="checkout__input__checkbox">
                            <label for="diff-acc">
                                Ship to a different address?
                                <input type="checkbox" id="diff-acc">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkout__input">
                            <p>Order notes<span>*</span></p>
                            <input type="text" name="note" placeholder="Notes about your order, e.g. special notes for delivery.">
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Your Order</h4>
                            <div class="checkout__order__products">Products <span>Total</span></div>
                            <ul>
                                @foreach ($cartDetails as $item)
                                    <input type="hidden" name="product-name[]" value="{{$item->name}}" id="">
                                    <input type="hidden" name="quantity[]" value="{{$item->quantity}}" id="">
                                    <li>{{$item->name}} <i class="fas fa-times px-3"></i> {{$item->quantity}} <span>৳{{$item->getPriceSum($item->id)}}</span></li>
                                @endforeach
                            </ul>
                            <div class="checkout__order__tax">
                                Tax ({{config('cart.tax')}}%)<span>10</span>
                            </div>
                            <div class="checkout__order__subtotal">Subtotal
                                @if (session()->has('coupon'))
                                    Discount ({{ session()->get('coupon')['name'] }}) :
                                    <br>
                                    <hr>
                                    New Subtotal <br>
                                @endif
                                <input type="hidden" name="subtotal" value="{{\Cart::getSubTotal()}}" id="">
                                <span>৳{{\Cart::getSubTotal()}}</span>
                            </div>
                            <div class="checkout__order__total">Total 
                                <input type="hidden" name="total" value="{{\Cart::getTotal()}}" id="">
                                <span>৳{{\Cart::getTotal()}}</span>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="payment">
                                    Cash On Delivery
                                    <input type="checkbox" name="payment_type" id="payment" value="cash">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="payment2">
                                    Bkash
                                    <input type="checkbox" name="payment_type" id="payment" value="bkash">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <button type="submit" class="site-btn">PLACE ORDER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
@section('scripts')
@endsection