@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
   <div id="shuttle-media">
        <div class="container-fluid">
            <h1>Shuttle in the media</h1>
            <div class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm">
                                <img src="{{asset('images/peace.png')}}" class="img-fluid mx-auto d-block">
                                <p>Shuttle - A new ride in town</p>
                                <p>The Daily star</p>
                            </div>
                            <div class="col-sm">
                                <img src="{{asset('images/peace.png')}}" class="img-fluid mx-auto d-block">
                                <p>Shuttle brings safe, comfortable transportation for women</p>
                                <p>New Age BD</p>
                            </div>
                        
                            <div class="col-sm">
                                <img src="{{asset('images/peace.png')}}" class="img-fluid mx-auto d-block">
                                <p>Shuttle brings safe, comfortable transportation for women</p>
                                <p>New Age BD</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm">
                                <img src="{{asset('images/peace.png')}}" class="d-block w-100">
                                <p>Shuttle - A new ride in town</p>
                                <p> The Daily Star </p>
                            </div>
                            <div class="col-sm">
                                <img src="{{asset('images/peace.png')}}" class="d-block w-100">
                                <p>Shuttle - A new ride in town</p>
                                <p> The Daily Star </p>
                            </div>
                            <div class="col-sm">
                                <img src="{{asset('images/peace.png')}}" class="d-block w-100">
                                <p>Shuttle - A new ride in town</p>
                                <p> The Daily Star </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="" role="button" data-slide="prev">
                    <i class="fa fa-chevron-left fa-lg"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next text-faded" href="" role="button" data-slide="next">
                    <i class="fa fa-chevron-right fa-lg"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
      </div>
   </div>
@endsection
