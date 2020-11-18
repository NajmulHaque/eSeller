@if(count(\Cart::getContent()) > 0)
    @foreach(\Cart::getContent() as $item)
        <li class="list-group-item" style="width: 100%;">
            <div class="row pr-2">
                <div class="col-lg-4">
                    <img src="{{ asset($item->attributes->image) }}" style="width: 50px; height: 50px;">
                </div>
                <div class="col-lg-4">
                    <b>{{$item->name}}</b>
                    <br><small>Qty: {{$item->quantity}}</small>
                </div>
                <div class="col-lg-2">
                    <p>৳{{ \Cart::get($item->id)->getPriceSum() }}</p>
                </div>
                <div class="col-lg-2 text-right">
                    <form action="{{ route('cart.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                        <button class="btn btn-secondary btn-sm"><i class="fa fa-close"></i></button>
                    </form>
                </div>
                <hr>
            </div>
        </li>
    @endforeach
    <br>
    <li class="list-group-item my-4" style="width: 100%;">
        <div class="row">
            <div class="col-lg-12 text-center">
                <b>Total: </b>৳{{ \Cart::getTotal() }}
            </div>
        </div>
    </li>
    <br>
    <div class="row" style="margin: 0px;">
        <a class="btn btn-dark btn-sm btn-block" href="{{ route('cart.index') }}">
            CART <i class="fa fa-arrow-right"></i>
        </a>
        <a class="btn btn-dark btn-sm btn-block" href="{{ route('checkout.index') }}">
            CHECKOUT <i class="fa fa-arrow-right"></i>
        </a>
    </div>
@else
    <li class="list-group-item">Your Cart is Empty</li>
@endif