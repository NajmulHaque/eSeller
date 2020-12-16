@extends('layouts.default')
@section('title','Contact')
@section('styles')
    <style>
        .contact__widget i{ color: green; font-size: 25px;}
        .breadcrumb-section{ background-color: rgb(255, 191, 0);}
        .breadcrumb-section h2{ font-size: 32px}
        #sub-notification{ background: linear-gradient(#242D66 50%, #fff 50%);font-size:17px;padding:4%;color: #333; border: none}
        #sub-notification p{ letter-spacing: 1px;font-weight: 600}
        #sub-notification .modal-footer{ border: none;}
        #sub-notification .btn{ border-radius: 10px;margin: 0 auto; margin-bottom: -4%;padding: 5px 20px;}
        div#notification { margin: 10% 0 0 0;padding-bottom: 0 !important;}
        #icon .fa{ font-weight: normal; font-size: 90px;color: #fff; }
        
    </style>
@endsection
@section('content')
    <section class="breadcrumb-section py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i class="fa fa-phone"></i>
                        <h4>Phone</h4>
                        <p>+88017000000</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i class="fa fa-map-marker"></i>
                        <h4>Address</h4>
                        <p>Bashundhara, Dhaka</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i class="fa fa-clock-o"></i>
                        <h4>Open time</h4>
                        <p>10:00 am to 23:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i class="fa fa-envelope"></i>
                        <h4>Email</h4>
                        <p>support@eseller.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
   <script type="text/javascript">
    $(document).ready(function () {
        @if (session()->has('modal'))
           $("#centralModal").modal("toggle");
        @endif
    });
   </script>
@endsection