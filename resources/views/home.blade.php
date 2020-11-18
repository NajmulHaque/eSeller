@extends('layouts.default')
@section('styles')
    <style>
        #profile-details p{
            border-bottom: 1px solid lightgray; font-size: 20px; font-weight: 600;
        }
        #profile-address p{border: 1px solid lightgray;padding: 1%}
        #profile-address a{list-style-type: none;}
    </style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="">
                <div class="card-header">
                    <h4>Your Profile</h4>
                </div>
                <div class="card-body" id="profile-details">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="name" class="pb-3">Name</label>
                        <p class="pb-2 pl-3" >{{$userDetails->name}}</p>
                    </div>
                    <div class="form-group ">
                        <label for="email" class="pt-4 pb-3">{{ __('E-Mail Address') }}</label>
                        <p class="pb-2 pl-3">{{$userDetails->email}}</p>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="pb-3">Phone Number</label>
                        <p class="pb-2 pl-3">{{$userDetails->phone}}</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 style="font-weight: 600">Address Book</h5>
                </div>
                <div class="card-body" id="profile-address">
                    <p class="text-center"><a href="#"><i class="fa fa-plus pr-2" aria-hidden="true"></i>  Address</a></p>
                    
                    <div class="row justify-content-center text-center">
                        <div class="col-md-10"><h5 class="pl-4">{{$userDetails->address}}</h5></div>
                        {{-- <div class="col-md-2"><a href="#" class="btn btn-info">Edit</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection