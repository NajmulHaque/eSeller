@extends('layouts.default')

@section('title', 'Vendor Search Results')

@section('content')
    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
{{-- 
    <div class="search-results-container container">
        <h2>Search Results</h2>
        <p class="search-results-count">{{ $vendors->total() }} result(s) for '{{ request()->input('query') }}'</p>

        @if ($vendors->total() > 0)
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>rating</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendors as $vendor)
                    <tr>
                        <th><a href="{{route('vendor-dashboard',$vendor->id)}}">{{ $vendor->name }}</a></th>
                        <td>{{ $vendor->address }}</td>
                        <td>{{$vendor->phone}}</td>
                        <td>{{ $vendor->rating }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $vendors->appends(request()->input())->links() }}
        @endif
    </div> <!-- end search-results-container --> --}}

    <div class="search-results-container container">
        <div class="row">
            @if ($vendors->total() > 0)
                @forelse ($vendors as $vendor)
                <div class="col-md-12 pb-3 text-center">
                    <h2>Search Results</h2>
                    <p class="search-results-count">{{ $vendors->total() }} result(s) for '{{ request()->input('query') }}'</p>            
                </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h4 class="mb-4 py-1" style="border: 1px solid lightgray;text-align: center;">Vendor List</h4>

                <div id="product-vendor" style="background-color: #f5f5f5;">
                    {{-- <h4 class="py-3 text-center" style="background-color: rgb(255, 191, 0);">Product Vendors</h4> --}}
                    <ul style="list-style-type: none;padding-top: 10px" style="">
                        @forelse ($vendors as $vendor)
                        <li>
                            <p class="pl-3">{{$vendor->name}}</p>
                            <p class="pl-3">{{$vendor->address}}</p>
                            <a href="{{ route('vendor-dashboard',$vendor->id) }}">
                                <img width="80px" height="80px" src="{{asset($vendor->avatar)}}">
                            </a>
                            <span class="pl-5">
                                @for ($i = 1; $i < 6; $i++) <i
                                    class="fa fa-star{{($i<=$vendor->rating) ? '':'No rating found'}}"></i>
                                    @endfor
                            </span>
                        </li>
                        <hr>
                        @empty
                        <div class="text-center">
                            <h5 class="text-danger font-weight-bold">No Vendors Found Yet!</h5>
                        </div>
                        @endforelse
                    </ul>
                </div>
                    </div>
                @empty
                    <div style="text-align: left">No items found</div>
                @endforelse
                {{ $vendors->links() }}
            @endif
        </div>
    </div>
@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
@endsection
