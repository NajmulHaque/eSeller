@extends('layouts.default')

@section('title', 'Thank You')

@section('content')

<div class="thank-you-section">
    <div class="jumbotron text-center">
        <h1 class="display-3">Thank you for <br> Your Order!</h1>
        <p class="lead">A confirmation email was sent <strong>Please check your email</strong> for further instructions
            on how to complete your account
            setup.</p>
        <hr>
        <p>
            Having trouble? <a href="{{route('contact')}}">Contact us</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="{{ url('/') }}" role="button">Continue to homepage</a>
        </p>
    </div>
</div>
@endsection