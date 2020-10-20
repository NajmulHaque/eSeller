@extends('layouts.default')
@section('styles')
<style type="text/css">
    ul{
        list-style-type: none;
        display: flex;
        float: right;
    }
    ul li a{
        margin: 0 10px 0 10px;
        text-transform: capitalize;

        font-family: sans-serif;
    }
    ul li a:hover{
        color: blue;
    text-shadow: 0 0 1px #fff;
    text-shadow: 0 0 1px #fff, 0 0 1px #fff;
    background: transparent;
    }
</style>
@endsection
@section('content')
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <h5>Profile</h5>
                            </div>
                            <div class="col-md-6 col-lg-6 text-right">
                                <ul>
                                    <li><a type="button" class="btn btn-info" href="">My profile</a></li>
                                    <li><a type="button" class="btn btn-info" href="">My Orders</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                           
                            <div class="col-md-3 text-center">
                                <img alt="User Pic" src="/images/user.jpg" class="img-circle img-responsive" width="200">
                                <h5 class="text-primary text-center pt-3" style="font-size: 22px">Abraham Issac</h5>
                            </div>
                            <div class="col-md-9 text-left">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>User Id</td>
                                                <td><input type="" name="" placeholder="123"></td>
                                            </tr>
                                            <tr>
                                                <td>Name:</td>
                                                <td><input id="name" type="text" name="name"  placeholder="Abraham Issac" required></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><input id="email" type="" name="email"  placeholder="abraham@gmail.com" required></td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td><input id="password" type="password" name="password" placeholder="Type New Password"></td>
                                            </tr>
                                            <tr>
                                                <td>Confrim Password</td>
                                                <td><input type="password" name="password" placeholder="Confirm Password"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                        <div class="text-center" style="padding-left: 26%"><a href="" type="button" class="btn btn-info">Update Profile</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection