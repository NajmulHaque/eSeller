
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($mightAlsoLike as $product)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{asset($product->image)}}">
                        <ul class="product__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="{{ route('shop.product',$product->id)}}"><i class="fa fa-retweet"></i></a></li>
                            <li>
                                <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
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
                        <h6><a href="#">{{ $product->name }} {{$product->details}}</a></h6>
                        <h5>৳{{$product->price}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>