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
    #profile{
        width: 100px;
    }
}      
</style>
@endsection
@section('content')
<div class="container border-bottom bg-white mt-1 pt-md-3 pt-2">
    @forelse ($vendorDetails as $vendorDetail)
    <div class="d-flex flex-md-row justify-content-around align-items-center">
        <div class="d-flex flex-md-row align-items-center pt-5">
            <div class="p-md-2">
                <p class="pl-3"><img src="{{asset('images/vendor/vendor.jpg')}}" alt="" id="profile"><br></p>
                <span>
                    @for ($i = 1; $i < 6; $i++) <i
                        class="fa fa-star{{($i<=$vendorDetail->rating) ? '':'No Reviews Yet'}} text-warning"></i>
                        @endfor
                </span>
            </div>
            <div id="vendor-info" class="pl-3 mb-2">
                <h4 style="font-size: 22px"><i class="far fa-edit pr-2"></i>{{$vendorDetail->name}}</h
                        style="font-size: 22px">
                    <div class="text-primary pt-2" style="font-size: 20px"><i
                            class="fas fa-business-time pr-2"></i>{{$vendorDetail->categoryName}}</div>
            </div>
        </div>
        <div class="d-flex flex-column" id="info">
            <div class="p-md-1 text-muted"> <span class="fa fa-envelope p-1 rounded-circle"></span>
                {{$vendorDetail->name}}@gmail.com
            </div>
            <div class="p-md-1 pt-sm-1 text-muted"> <span class="fa fa-phone bg-light p-1 rounded-circle"></span>
                {{$vendorDetail->phone}}</div>
        </div>
        <div class="rounded p-lg-2 p-1" id="blue-background">
            <div class="d-flex flex-md-row align-items-center">
                <div class="d-flex flex-column align-items-center px-lg-3 px-md-2 px-1" id="border-right">
                    <p class="h4 text-info">{{$totalVendorProducts}}</p>
                    <div class="text-muted" id="count">Total Product</div>
                </div>
                <div class="d-flex flex-column align-items-center px-lg-3 px-md-2 px-1" id="border-right">
                    <p class="h4 text-danger">17</p>
                    <div class="text-muted" id="count">Total Sell</div>
                </div>
                <div class="d-flex flex-column align-items-center px-lg-3 px-md-2 px-1" id="border-right">
                    <p class="h4 text-primary">{{$totalVendorReview}}</p>
                    <div class="text-muted" id="count">Customer Review</div>
                </div>
                <div class="d-flex flex-column align-items-center px-lg-4 px-md-2 px-sm-1 px-2">
                    <p class="h5 font-weight-bold text-warning">{{$vendorDetail->categoryName}}</p>
                    <div class="text-muted" id="count">Business Category</div>
                </div>
            </div>
        </div>
    </div>
    <div class="pl-lg-5 pt-lg-2 pt-md-1">
        <div class="featured__controls pt-5">
            <ul>
                <li class="active" data-filter=".selling-product">Selling Products</li>
                <li data-filter=".customer-review">Customer Review</li>
                <li data-filter=".send-message">Send Message</li>
            </ul>
        </div>
    </div>

    <div class="row featured__filter px-5 justify-content-center">
        <div class="col-lg-10 col-md-10 col-sm-10 mix selling-product" style="display: ">
            <div class="featured__item">
                <div class="row">
                    @forelse ($vendorProducts as $vendorProduct)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{asset($vendorProduct->image)}}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="{{ route('shop.product',$vendorProduct->id) }}"><i
                                                class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">{{$vendorProduct->name}} {{$vendorProduct->details}}</a></h6>
                                <h5>৳{{$vendorProduct->price}}</h5>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div>No Product Add Yet</div>
                    @endforelse
                </div>
                {{$vendorProducts->links()}}
            </div>
        </div>

        <div class="col-lg-10 col-md-10 col-sm-10 mix customer-review row py-5" style="display: none">
            @forelse ($vendorReviews as $productReview)
            <div class="row pb-5">
                <div class="col-md-2">
                    <img class="rounded-circle" src="{{asset($productReview->avatar)}}"
                        class="img img-rounded img-fluid" />
                    <p class="text-secondary text-center">
                        {{ Carbon\Carbon::parse($productReview->created_at)->diffForHumans()}}
                    </p>
                </div>
                <div class="col-md-10">
                    <a class="float-left" href=""><strong>{{$productReview->name}}</strong></a>
                    <span style="float: right">
                        @for ($i = 1; $i < 6; $i++) <i
                            class="text-warning fa fa-star{{($i<=$productReview->rating) ? '':'No reviews Yet'}}"></i>
                            @endfor
                    </span>
                    <div class="clearfix"></div>
                    <p style="width: 80%;font-size: 18px">{{$productReview->comments}}</p>
                    <div>
                        {{-- <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a> --}}
                        <a class="float-right btn text-white btn-danger"> 
                            <i class="fa fa-heart"></i> Like
                        </a>
                    </div>
                </div>
            </div>
            @empty
                <div>No Review Yet</div>
            @endforelse
            {{$vendorReviews->links()}}
        </div>
        <div class="contact-form spad mix send-message" style="display: none">
            <div class="container">
                <form method="POST" action="{{ route('user.message') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <textarea name="message" placeholder="Type your message..."></textarea>
                            <button type="submit" class="site-btn">SEND MESSAGE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @empty
        <div>No Data Found</div>
    @endforelse
</div>
@endsection
@section('scripts')
<script>

</script>
@endsection