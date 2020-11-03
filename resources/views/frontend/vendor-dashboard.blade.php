@extends('layouts.default')
@section('styles')
<style type="text/css">
    .vendor-profile {
        text-align: center;
    }

    .vendor-profile .vendor-bio img {
        width: 200px;
        border-radius: 50%;
    }

    .vendor-bio ul {
        list-style-type: none;
        display: inline-flex;
    }

    .vendor-bio ul li a {
        color: blue;
        font-size: 25px
    }

    .vendor-bio ul li a:hover {
        color: blue;
    }

    body {
        background-color: #eee
    }

    .tab-contents {
        background-color: rgb(230, 228, 228)
    }

    .nav-tabs .nav-link,
    .nav-tabs {
        border: none;
        color: black
    }

    .nav-tabs .nav-link:focus {
        border-bottom: 3px solid blue;
        font-weight: 700
    }

    .selected-tab {
        background-color: rgb(231, 234, 238)
    }

    .year {
        margin-left: 100px;
        font-size: 20px;
        font-weight: 700;
        padding-top: 10px
    }

    .vertical-progress {
        width: 2px;
        height: 250px
    }

    #small-font {
        font-size: 14px
    }

    #blue-background {
        background-color: rgb(233, 243, 245)
    }

    #dot1,
    #dot2,
    #dot3 {
        position: absolute;
        width: 20px;
        height: 20px;
        border: 5px solid #fff;
        border-radius: 50%;
        background: rgb(21, 90, 194)
    }

    #arrow {
        content: "";
        position: absolute;
        margin-left: -5px;
        border-width: 9px;
        border-style: solid;
        border-color: white transparent transparent transparent;
        transform: rotate(90deg)
    }

    #bluearrow {
        content: "";
        position: absolute;
        margin-left: -5px;
        border-width: 9px;
        border-style: solid;
        border-color: rgb(29, 99, 240) transparent transparent transparent;
        transform: rotate(90deg)
    }

    @media(min-width:992px) {
        #profile {
            width: 75px;
            width: 75px
        }

        .h4 {
            font-weight: bolder
        }

        #border-right {
            border-right: 2px solid rgb(165, 165, 165)
        }

        #dot1 {
            left: 112px
        }

        #dot2 {
            left: 112px;
            bottom: 138px
        }

        #dot3 {
            left: 112px;
            bottom: 25px
        }

        #status1 {
            position: absolute;
            width: 300px;
            height: 50px;
            left: 150px;
            bottom: 245px
        }

        #status2 {
            position: absolute;
            width: 300px;
            height: 50px;
            left: 150px;
            bottom: 126px
        }

        #status3 {
            position: absolute;
            width: 300px;
            height: 50px;
            left: 150px;
            bottom: 15px
        }

        #arrow,
        #bluearrow {
            top: 31%;
            left: -4%
        }

        .view {
            height: 360px;
            margin-top: 5%
        }
    }

   
</style>
@endsection
@section('content')
<div class="container border-bottom bg-white mt-1 pt-md-3 pt-2">
    <div class="d-flex flex-md-row justify-content-around align-items-center">
        <div class="d-flex flex-md-row align-items-center">
            <div class="p-md-2">
                <img src="{{asset('images/vendor/vendor.jpg')}}" alt="" class="rounded-circle" id="profile"><br>
                <span>&#9734; &#9734; &#9734; &#9734; &#9734;</span>
            </div>
            <div class="p-md-2 p-1" id="info">
                <h5>Issac Farhan</h5>
                <div class="text-muted">Fruit Vendor</div>
            </div>
        </div>
        <div class="d-flex flex-column" id="info">
            <div class="p-md-1 text-muted"> <span class="fa fa-envelope p-1 rounded-circle"></span> vendor@gmail.com
            </div>
            <div class="p-md-1 pt-sm-1 text-muted"> <span class="fa fa-phone bg-light p-1 rounded-circle"></span>
                +880170000000</div>
        </div>
        <div class="rounded p-lg-2 p-1" id="blue-background">
            <div class="d-flex flex-md-row align-items-center">
                <div class="d-flex flex-column align-items-center px-lg-3 px-md-2 px-1" id="border-right">
                    <p class="h4">40</p>
                    <div class="text-muted" id="count">Total Product</div>
                </div>
                <div class="d-flex flex-column align-items-center px-lg-3 px-md-2 px-1" id="border-right">
                    <p class="h4">117</p>
                    <div class="text-muted" id="count">Total Sell</div>
                </div>
                <div class="d-flex flex-column align-items-center px-lg-3 px-md-2 px-1" id="border-right">
                    <p class="h4">58</p>
                    <div class="text-muted" id="count">Customer Review</div>
                </div>
                <div class="d-flex flex-column align-items-center px-lg-4 px-md-2 px-sm-1 px-2">
                    <p class="h5 font-weight-bold">Fruits</p>
                    <div class="text-muted" id="count">Business Category</div>
                </div>
            </div>
        </div>
    </div>
    <div class="pl-lg-5 pt-lg-2 pt-md-1">
        <div class="featured__controls pt-5">
            <ul>
                <li class="active" data-filter=".selling-product">Selling Products</li>
                <li data-filter=".details">Vendor Details</li>
                <li data-filter=".customer-review">Customer Review</li>
                <li data-filter=".contact">Direct Contact</li>
            </ul>
        </div>
    </div>

    <div class="row featured__filter px-5 justify-content-center">
        <div class="col-lg-10 col-md-10 col-sm-10 mix details">
            <div class="featured__item">
                <h3 class="text-center pb-5">Vendor Basic Information</h3>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Vendor Id</td>
                            <td><input type="" name="" placeholder="123"></td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td><input id="name" type="text" name="name" placeholder="Issac Farhan" required></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input id="email" type="" name="email" placeholder="farhan@gmail.com" required></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><input type="text" name="address" placeholder="Bashundhara, Dhaka"></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="text" name="phone" placeholder="+0170000000"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 mix selling-product">
            <div class="featured__item">
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>Sort By</span>
                                <select>
                                    <option value="0">Default</option>
                                    <option value="0">Default</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span>16</span> Products found</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg"
                                data-setbg="{{asset('images/product/product-1.jpg')}}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Meat</a></h6>
                                <h5>৳300.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg"
                                data-setbg="{{asset('images/product/product-2.jpg')}}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Banana</a></h6>
                                <h5>৳50.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg"
                                data-setbg="{{asset('images/product/product-3.jpg')}}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Guava</a></h6>
                                <h5>৳100.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg"
                                data-setbg="{{asset('images/product/product-4.jpg')}}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Grape</a></h6>
                                <h5>৳130.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg"
                                data-setbg="{{asset('images/product/product-7.jpg')}}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Watermelon</a></h6>
                                <h5>৳200.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg"
                                data-setbg="{{asset('images/product/product-6.jpg')}}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Mango</a></h6>
                                <h5>৳80.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection