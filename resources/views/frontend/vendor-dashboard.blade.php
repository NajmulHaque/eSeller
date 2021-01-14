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

    #profile {
        width: 100px;
    }

    .rating_submit_inner {
        display: block;
        direction: rtl;
        unicode-bidi: bidi-override;
        text-align: center;
    }

    .rating_submit_inner .star {
        display: none;
    }

    .rating_submit_inner label {
        color: lightgray;
        display: inline-block;
        font-size: 30px;
        margin: 0 -2px;
        transition: transform .15s ease;
        cursor: pointer;
    }

    .rating_submit_inner label:hover {
        transform: scale(1.35, 1.35);
    }

    .rating_submit_inner label:hover,
    .rating_submit_inner label:hover~label {
        color: orange;
    }

    .rating_submit_inner .star:checked~label {
        color: orange;
    }

    .post_ratings .fa {
        color: #ff9800;
    }

    .post_ratings .fa.light {
        color: #d3d3d3;
    }
    }
</style>
@endsection
@section('content')
<div class="container border-bottom bg-white mt-1 pt-md-3 pt-2">
    @if (session()->has('message'))
    <div class="alert alert-success text-center" role="alert">
        {{ session('message') }}
    </div>
    @endif
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
            </div>
        </div>
        <div class="info">
            <div class="p-md-1 pt-sm-1 text-muted">
                <div class="rating_submit_inner">
                    <form action="{{route('vendor-rating',$vendorDetail->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input id="radio1" type="radio" name="rating" value="5" class="star" />
                        <label for="radio1">&#9733;</label>
                        <input id="radio2" type="radio" name="rating" value="4" class="star" />
                        <label for="radio2">&#9733;</label>
                        <input id="radio3" type="radio" name="rating" value="3" class="star" />
                        <label for="radio3">&#9733;</label>
                        <input id="radio4" type="radio" name="rating" value="2" class="star" />
                        <label for="radio4">&#9733;</label>
                        <input id="radio5" type="radio" name="rating" value="1" class="star" />
                        <label for="radio5">&#9733;</label><br>
                        <button type="submit" class="btn btn-info mt-3">submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="info">
            <div class="p-md-1 pt-sm-1 text-muted"> <span class="fa fa-phone bg-light p-1 rounded-circle"></span>
                {{$vendorDetail->phone}}</div>
            <div class="text-primary pt-2" style="font-size: 20px"><i
                    class="fas fa-business-time pr-2"></i>{{$vendorDetail->address}}</div>
        </div>
    </div>
    <div class="pl-lg-5 pt-lg-2 pt-md-1">
        <div class="featured__controls pt-5">
            <ul>
                <li class="active" data-filter=".selling-product">Selling Products</li>
                <li data-filter=".customer-review">Customer Review</li>
                <!-- <li data-filter=".send-message">Send Message</li> -->
            </ul>
        </div>
    </div>

    <div class="row featured__filter px-5" style="justify-content: center">
        <div class="col-lg-10 col-md-10 col-sm-10 mix selling-product">
            <div class="featured__item">
                <div class="row">
                    @forelse ($vendorProducts as $vendorProduct)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{asset($vendorProduct->image)}}">
                                <ul class="product__item__pic__hover">
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

        <div class="col-lg-10 col-md-10 col-sm-10 mix customer-review row py-5" style="display: none; text-align: center">
            <div class="row pb-5" style="justify-content: center">
                @forelse ($vendorReviews as $productReview)
                <div class="col-md-10" >
                    <div class="row">
                        <div class="col-md-6">
                            <img width="100px" class="rounded-circle" src="{{asset($productReview->avatar)}}"
                                class="img img-rounded img-fluid" />
                            <p>{{$productReview->name}}</p> 
                        </div>
                        <div class="col-md-6 mt-5" >
                           @for ($i = 1; $i < 6; $i++) <i
                           class="text-warning fa fa-star{{($i<=$productReview->rating) ? '':'No reviews Yet'}}"></i>
                            @endfor   
                        </div>
                    </div>
                </div>
                @empty
                <div>No Review Yet</div>
                @endforelse
            </div>
            {{-- {{$vendorReviews->links()}} --}}
        </div>
        <div class="contact-form spad mix send-message" style="display: none">
            <div class="container">
                <form method="POST" action="{{ route('user.message') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <input type="hidden" name="vendor_id" value="{{$vendorDetail->id}}">
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