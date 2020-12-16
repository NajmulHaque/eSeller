@extends('layouts.default')

@section('title', 'Search Results')

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

    {{-- <div class="search-results-container container">
        <h2>Search Results</h2>
        <p class="search-results-count">{{ $products->total() }} result(s) for '{{ request()->input('query') }}'</p>

        @if ($products->total() > 0)
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th><a href="{{route('shop.product',$product->id)}}">{{ $product->name }}</a></th>
                        <td>{{ $product->details }}</td>
                        <td>{{\Illuminate\Support\Str::limit($product->description, 80)}}</td>
                        <td>{{ $product->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $products->appends(request()->input())->links() }}
        @endif
    </div> <!-- end search-results-container --> --}}
<div class="search-results-container container">
    <div class="row">
        @if ($products->total() > 0)
        @forelse ($products as $product)
        <div class="col-md-12 pb-5 text-center">
            <h2 style="background-color: rgb(127, 173, 57);color: #fff">Search Results</h2>
            <p class="search-results-count">{{ $products->total() }} result(s) for '{{ request()->input('query') }}'</p>
        </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{ $product->image }}">
                        <ul class="product__item__pic__hover">
                            <li><a href="{{ route('shop.product',$product->id) }}"><i class="fa fa-retweet"></i></a></li>
                            <li>
                                <form action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                    <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                    <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                                    <input type="hidden" value="{{ $product->details }}" id="details"
                                        name="details">
                                    <input type="hidden" value="{{ $product->image }}" id="img" name="img">
                                    <input type="hidden" value="{{ $product->slug }}" id="slug" name="slug">
                                    <input type="hidden" value="1" id="quantity" name="quantity">
                                    <button title="add to cart" id="product-cart-btn">
                                        <i title="add to cart" class="fa fa-shopping-cart"></i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="{{route('shop.product',$product->id)}}">{{ $product->name }} {{ $product->details}}</a></h6>
                        <h5>৳{{ $product->price }}</h5>
                    </div>
                </div>
            </div>
        @empty
            <div style="text-align: left">No items found</div>
        @endforelse
        {{ $products->links() }}
        @endif
    </div>
</div>
@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
@endsection
