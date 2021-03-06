<nav class="navbar navbar-expand-md navbar-light bg-white shadow-none" id="header">
    <div class="container">
        <div class="header-logo">
            <a href="/">
                <h3 style="color: rgb(255, 191, 0); font-weight: bold">eVendor</h3>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse header__menu col-lg-9" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link home" href="{{route('landing')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/shop">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <a href="/home" class="pl-4">Profile</a>
                    </div>
                </li>
                @endguest
                <div class="header__cart">
                    <ul>
                        {{-- <li class="dropdown">
                            <a href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                                <i class="fa fa-heart"></i>
                                <span>0</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                                style="width: 450px; padding: 0px; border-color: #9DA0A2">
                                <ul class="list-group" style="margin: 20px;">
                                    @include('frontend.partials.wishlist')
                                </ul>
                            </div>
                        </li> --}}
                        <li class="dropdown">
                            <a href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                                <i class="fa fa-shopping-cart"></i>
                                <span>{{ \Cart::getTotalQuantity()}}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                                style="width: 450px; padding: 0px; border-color: #9DA0A2">
                                <ul class="list-group" style="margin: 20px;">
                                    @include('frontend.partials.cart-drop')
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="header__cart__price">item: <span>৳{{\Cart::getTotal()}}</span></div>
            </ul>
        </div>
    </div>
</nav>