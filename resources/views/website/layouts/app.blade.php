<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Tonistyle Store & Ecommerce</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo/logo1.svg') }}">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/lightgallery/dist/css/lightgallery.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/lightgallery/dist/css/lg-thumbnail.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/lightgallery/dist/css/lg-zoom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link class="skin" type="text/css" rel="stylesheet" href="{{ asset('assets/css/skin/skin-1.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""> -->
    <link href="../css2?family=DM+Sans:wght@400;500;700&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

        @yield('styles')


</head>

<body>







    <style>

        .alert {
            position: fixed;
            top: 0;
            right: 0;
            z-index: 9999;
        }


        .dropdown-menu {
            transition: opacity 0.5s ease, transform 0.5s ease;
            display: none;
            opacity: 0;
            transform: translateY(-10px);
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        /* Proper alignment and borders */
        .dropdown-menu {
            margin-top: 0;
        }

        .dropdown-divider {
            margin: 0.5rem 0;
            border-top: 1px solid rgba(0, 0, 0, 0.15);
        }
        .dropdown-item{
            height:20px;
            text-align:left;
            padding-top:5px;
            margin-top:9px;
        }

        .swal-toast {
            background-color: #fff;
            color: #f7f7fd;
            z-index: 9999 !important;
        }


    </style>

    <div class="page-wraper">


        {{-- @if (Route::current()->uri()=== '/')

            <div id="loading-area" class="preloader-wrapper-2">
                <div class="loader"></div>
            </div>
        @endif --}}
        <!-- Header -->
        <header class="site-header mo-left header style-2">
            <!-- Main Header -->
            <div class="header-info-bar">
                <div class="container clearfix">

                    <div class="logo-header logo-dark">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/logo/logo1.svg') }}" alt="logo"></a>
                    </div>

                    <!-- EXTRA NAV -->
                    <div class="extra-nav d-md-flex d-none m-l15">
                        <div class="extra-cell">
                            <ul class="navbar-nav header-right m-0">
                                <li class="nav-item info-box ">
                                    <div class="nav-link">
                                        <div class="dz-icon">

                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- header search nav -->
                    <div class="header-search-nav">
                        <form class="header-item-search">
                            <div class="col-md-6">
                                <div class="input-group search-input">


                                    <input type="text" class="form-control" placeholder="Search for products" style="border:1px solid #f7f7fd;">
                                    <button class="btn" type="button">
                                        <i class="iconly-Light-Search text-secondary"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Main Header End -->

            <!-- Main Header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg sticky-top">
                <div class="main-bar clearfix">
                    <div class="container clearfix d-lg-flex d-block">
                        <!-- Website Logo -->
                        <div class="logo-header logo-dark">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.svg') }}" alt="logo"></a>
                        </div>

                        <!-- Nav Toggle Button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <!-- Main Nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                            <div class="logo-header">
                                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.svg') }}" alt=""></a>
                            </div>
                            <div class="browse-category-menu">
                                <a href="javascript:void(0);" class="category-btn">
                                    <div class="category-menu me-3">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <span class="category-btn-title">
                                        Browse Categories
                                    </span>
                                    <span class="toggle-arrow ms-auto">
                                        <i class="icon feather icon-chevron-down"></i>
                                    </span>
                                </a>
                                <div class="category-menu-items" style="display: none;">
                                    <ul class="nav navbar-nav">
                                        <li class="has-mega-menu cate-drop">
                                            <a href="javascript:void(0);">
                                                <i class="icon feather icon-arrow-right"></i>
                                                <span>Clothes</span>

                                            </a>

                                        </li>
                                        <li class="cate-drop">
                                            <a href="javascript:void(0);">
                                                <i class="icon feather icon-arrow-right"></i>
                                                <span>UrbanSkirt</span>

                                            </a>

                                        </li>

                                        <li>
                                            <a href="">
                                                <i class="icon feather icon-arrow-right"></i>
                                                <span>VelvetGown</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <ul class="nav navbar-nav dark-nav">
                                <li class="has-mega-menu sub-menu-down">
                                    <a href="{{ route('home') }}"><span>Home</span><i class="fas fa-chevron-down tabindex"></i></a>


                                </li>
                                <li class="has-mega-menu sub-menu-down">
                                    <a href="{{ route('shop') }}"><span>Shop</span><i
                                            class="fas fa-chevron-down tabindex"></i></a>

                                </li>
                                <li class="has-mega-menu sub-menu-down"><a
                                        href="javascript:void(0);"><span>Blog </span><i
                                            class="fas fa-chevron-down tabindex"></i></a>

                                </li>
                                <li class="has-mega-menu sub-menu-down"><a href="javascript:void(0);"><span>Fashion</span><i class="fas fa-chevron-down tabindex"></i></a>

                                </li>
                                <li class="has-mega-menu sub-menu-down"><a href="javascript:void(0);"><span>Seasonal
                                Deals
                                            Card</span><i class="fas fa-chevron-down tabindex"></i></a>

                                </li>
                            </ul>

                        </div>

                        <!-- EXTRA NAV -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <ul class="header-right">
                                    @guest
                                        <li class="nav-item login-link">
                                            <a class="nav-link" href="{{ route('login') }}">
                                                Login / Register
                                            </a>
                                        </li>
                                    @endguest

                                    @auth
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-user" style="font-size:16px; margin-right:5px;"></i> Hi {{ Auth::user()->first_name }}
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                {{-- <a class="dropdown-item text-primary" href="">Hi, {{ Auth::user()->first_name  }} {{ Auth::user()->last_name }}</a> --}}
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{ route('account.profile') }}">My Dashboard</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="">Orders</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="">Cart</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="">Account Settings</a>
                                                <div class="dropdown-divider"></div>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">Logout</button>
                                                </form>
                                            </div>
                                        </li>
                                    @endauth




                                    <li class="nav-item wishlist-link">
                                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                            <i class="iconly-Light-Heart2"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item cart-link">
                                      <a href="javascript:void(0);" class="nav-link cart-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                        aria-controls="offcanvasRight">
                                            <i class="iconly-Broken-Buy"></i>
                                        @if (Auth::check())
                                            @php
                                                $userId = Auth::id();
                                                $cartCount = \App\Models\Cart::where('user_id', $userId)->count();
                                            @endphp
                                        @else
                                            @php
                                            $cartCount = count((array) session('cart'));
                                            @endphp
                                        @endif
                                           @if ($cartCount > 0)
                                             <span class="badge badge-circle" id="cartCounter">{{ $cartCount }}</span>
                                           @endif
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Header End -->

            <!-- SearchBar -->
            <div class="offcanvas dz-offcanvas offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    &times;
                </button>
                <div class="offcanvas-body">
                    <div class="product-description">
                        <div class="dz-tabs">
                            <ul class="nav nav-tabs center" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="shopping-cart" data-bs-toggle="tab"
                                        data-bs-target="#shopping-cart-pane" type="button" role="tab"
                                        aria-controls="shopping-cart-pane" aria-selected="true">Shopping Cart
                                        @if (count((array)session('cart')) > 0)
                                        <span class="badge badge-light">{{ count((array) session('cart')) }}</span>
                                        @endif
                                    </button>
                                </li>

                            </ul>
                            <div class="tab-content pt-4" id="dz-shopcart-sidebar">
                                <div class="tab-pane fade show active" id="shopping-cart-pane" role="tabpanel"
                                    aria-labelledby="shopping-cart" tabindex="0">
                                    <div class="shop-sidebar-cart">
                                        <ul class="sidebar-cart-list">
                                            @php
                                                $total = 0;
                                            @endphp

                                            @if (Auth::check())
                                                @php

                                                    $cartItems = \App\Models\Cart::where('user_id', Auth::user()->id)->get();
                                                @endphp
                                            @else
                                                @php

                                                    $cartItems = session()->get('cart', []);
                                                @endphp
                                            @endif

                                            @foreach ($cartItems as $cartItem)
                                            @php
                                                $product = \App\Models\Product::find($cartItem['product_id']); // Assuming your product model is named Product
                                                $total += $product->selling_price * $cartItem['quantity'];
                                            @endphp
                                            <li>
                                                <div class="cart-widget">



                                                    <div class="dz-media me-3">
                                                        @if ($product->productImages->isNotEmpty())
                                                        <img src="{{ asset($product->productImages->first()->product_image) }}" alt="">
                                                        @else
                                                            <img src="" alt="">
                                                        @endif
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6 class="title" style="font-size:14px;"><a href="#">{{ $product->product_name }}</a></h6>
                                                        <div class="d-flex align-items-center">
                                                            <div class="btn-quantity light quantity-sm me-3">
                                                                {{-- <input type="text" value="{{ $product->quantity }}" name="demo_vertical2"> --}}
                                                            </div>
                                                            <h6 class="dz-price  mb-0">&#8358; {{ $product->selling_price }}</h6>
                                                        </div>
                                                    </div>
                                                    <form action="{{ route('cart.destroy', $product->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div>
                                                            <button type="submit" id="close-btn"><i class="ti-close"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>

                                            @endforeach

                                        </ul>
                                        @if ($total > 0)

                                        <div class="cart-total">
                                            <h5 class="mb-0">Subtotal:</h5>
                                            <h5 class="mb-0">&#8358; {{ number_format($total) }}</h5>
                                        </div>

                                        @else
                                        <div class="cart-total">
                                            <h5 class="mb-0">Cart is currently empty</h5>
                                        </div>

                                        @endif
                                        @if ($total > 0)
                                        <div class="mt-auto">
                                            <div class="shipping-time">
                                                <div class="dz-icon">
                                                    <i class="flaticon flaticon-ship"></i>
                                                </div>
                                                <div class="shipping-content">
                                                    <h6 class="title pe-4">Proceed to your shopping cart</h6>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-animated border-0" style="width: 75%;"
                                                            role="progressbar">
                                                            <span class="sr-only">75% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{ route('shopping.cart') }}" class="btn btn-secondary btn-block">View Cart</a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                {{-- <div class="tab-pane fade" id="wishlist-pane" role="tabpanel" aria-labelledby="wishlist"
                                    tabindex="0">
                                    <div class="shop-sidebar-cart">
                                        <ul class="sidebar-cart-list">
                                            <li>
                                                <div class="cart-widget">
                                                    <div class="dz-media me-3">
                                                        <img src="images/shop/shop-cart/pic1.jpg" alt="">
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6 class="title"><a href="product-thumbnail.html">Sophisticated Swagger
                                                                Suit</a></h6>
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="dz-price  mb-0">$50.00</h6>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="dz-close">
                                                        <i class="ti-close"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-widget">
                                                    <div class="dz-media me-3">
                                                        <img src="images/shop/shop-cart/pic2.jpg" alt="">
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6 class="title"><a href="product-thumbnail.html">Cozy Knit Cardigan
                                                                Sweater</a></h6>
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="dz-price  mb-0">$40.00</h6>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="dz-close">
                                                        <i class="ti-close"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-widget">
                                                    <div class="dz-media me-3">
                                                        <img src="images/shop/shop-cart/pic3.jpg" alt="">
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6 class="title"><a href="product-thumbnail.html">Athletic Mesh Sports
                                                                Leggings</a></h6>
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="dz-price  mb-0">$65.00</h6>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="dz-close">
                                                        <i class="ti-close"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mt-auto">
                                            <a href="shop-wishlist.html" class="btn btn-secondary btn-block">Check Your
                                                Favourite</a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dz-search-area dz-offcanvas offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    &times;
                </button>
                <div class="container">
                    <form class="header-item-search">
                        <div class="input-group search-input">
                            <select class="default-select">
                                <option>All Categories</option>
                                <option>Clothes</option>
                                <option>UrbanSkirt</option>
                                <option>VelvetGown</option>
                                <option>LushShorts</option>
                                <option>Vintage</option>

                            </select>
                            <input type="search" class="form-control" placeholder="Search Product">
                            <button class="btn" type="button">
                                <i class="iconly-Light-Search"></i>
                            </button>
                        </div>
                        <ul class="recent-tag">
                            <li class="pe-0"><span>Quick Search :</span></li>
                            <li><a href="">Clothes</a></li>
                            <li><a href="">UrbanSkirt</a></li>
                            <li><a href="">VelvetGown</a></li>
                            <li><a href="">LushShorts</a></li>
                        </ul>
                    </form>
                    <div class="row">
                        <div class="col-xl-12">
                            <h5 class="mb-3">You May Also Like</h5>
                            <div class="swiper category-swiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/1.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">SilkBliss Dress</a></h6>
                                                <h6 class="price">$40.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/3.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">GlamPants</a></h6>
                                                <h6 class="price">$30.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/4.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">ComfyLeggings</a></h6>
                                                <h6 class="price">$35.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/2.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">ClassicCapri</a></h6>
                                                <h6 class="price">$20.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/5.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">DapperCoat</a></h6>
                                                <h6 class="price">$70.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/6.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">ComfyLeggings</a></h6>
                                                <h6 class="price">$45.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/7.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">DenimDream Jeans</a></h6>
                                                <h6 class="price">$40.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/4.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">SilkBliss Dress</a></h6>
                                                <h6 class="price">$60.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SearchBar -->


        </header>


        <div class="page-content bg-light overflow-hidden">

            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="site-footer bg-light">
            <!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="widget widget_about me-2">
                                <div class="footer-logo logo-dark">
                                    <a href=""><img src="images/logo.svg" alt=""></a>
                                </div>
                                <ul class="widget-address">
                                    <li>
                                        <p><span>Address</span> : Block 43 B Army Estate Sepele Road Warri Delta State</p>
                                    </li>
                                    <li>
                                        <p><span>E-mail</span> : info@tonistylestore.com</p>
                                    </li>
                                    <li>
                                        <p><span>Phone</span> : (+234) 70 144 19922</p>
                                    </li>
                                </ul>
                                <div class="subscribe_widget">
                                    <h6 class="title fw-medium text-capitalize">subscribe to our newsletter</h6>
                                    <form class="dzSubscribe style-1">
                                        <div class="dzSubscribeMsg"></div>
                                        <div class="form-group">
                                            <div class="input-group mb-0">
                                                <input name="dzEmail" required="required" type="email"
                                                    class="form-control" placeholder="Your Email Address">
                                                <div class="input-group-addon">
                                                    <button name="submit" value="Submit" type="submit" class="btn">
                                                        <i class="icon feather icon-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="widget widget_post">
                                <h5 class="footer-title mx-2">Recent Posts</h5>
                                <ul>
                                    <li>
                                        <div class="dz-media">
                                            <img src="images/shop/product/small/1.png" alt="">
                                        </div>
                                        <div class="dz-content">
                                            <h6 class="name"><a href="">Cozy Knit Cardigan Sweater</a>
                                            </h6>
                                            <span class="time">July 23, 2023</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dz-media">
                                            <img src="images/shop/product/small/2.png" alt="">
                                        </div>
                                        <div class="dz-content">
                                            <h6 class="name"><a href="">Sophisticated Swagger Suit</a>
                                            </h6>
                                            <span class="time">July 23, 2023</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dz-media">
                                            <img src="images/shop/product/small/3.png" alt="">
                                        </div>
                                        <div class="dz-content">
                                            <h6 class="name"><a href="">Athletic Mesh Sports
                                                    Leggings</a></h6>
                                            <span class="time">July 23, 2023</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-3 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="widget widget_services">
                                <h5 class="footer-title">Categories</h5>
                                <ul>
                                    <li><a href="javascript:void(0);">Women</a></li>
                                    <li><a href="javascript:void(0);">Men</a></li>
                                    <li><a href="javascript:void(0);">Children</a></li>
                                    <li><a href="javascript:void(0);">Shoes</a></li>
                                    <li><a href="javascript:void(0);">Watches</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-3 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="widget widget_services">
                                <h5 class="footer-title">HELP</h5>
                                <ul>
                                    <li><a href="javascript:void(0);">Track Order</a></li>
                                    <li><a href="javascript:void(0);">Returns</a></li>
                                    <li><a href="javascript:void(0);">Shipping</a></li>
                                    <li><a href="javascript:void(0);">FAQs</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-3 col-sm-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="widget widget_services">
                                <h5 class="footer-title">Quick Links</h5>
                                <ul>
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li><a href="javascript:void(0);">Shop</a></li>
                                    <li><a href="javascript:void(0);">Fashion</a></li>
                                    <li><a href="javascript:void(0);">Seasonal Deals</a></li>
                                    <li><a href="javascript:void(0);">Gift Card</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Top End -->

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row fb-inner wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-6 col-md-12 text-start">
                            <p class="copyright-text">© <span class="current-year">2024</span> <a
                                    href="https://www.tonistyle store.com/">tonistyle store</a> Theme. All Rights
                                Reserved.</p>
                        </div>
                        <div class="col-lg-6 col-md-12 text-end">
                            <div
                                class="d-flex align-items-center justify-content-center justify-content-md-center justify-content-xl-end">
                                <span class="me-3">We Accept: </span>
                                <img src="images/footer-img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom End -->

        </footer>



        <button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>



    </div>
    <!-- JAVASCRIPT FILES ========================================= -->


    @yield('scripts')


    <script src="{{ asset('assets/js/cart.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script> --}}
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- BOOTSTRAP MIN JS -->
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <!-- BOOTSTRAP SELECT MIN JS -->
    <script src="{{ asset('assets/vendor/bootstrap-touchspin/bootstrap-touchspin.js') }}"></script>
    <!-- BOOTSTRAP TOUCHSPIN JS -->
    <script src="{{ asset('assets/vendor/counter/waypoints-min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counter/counterup.min.js') }}"></script>
    <!-- COUNTERUP JS -->
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <!-- SWIPER JS -->
    <script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/vendor/counter/waypoints-min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.js') }}"></script>
     <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.js') }}"></script>
     <script src="{{ asset('assets/vendor/masonry/masonry-4.2.2.js') }}"></script>
     <script src="{{ asset('assets/vendor/masonry/isotope.pkgd.min.js') }}"></script>
     <script src="{{ asset('assets/vendor/countdown/jquery.countdown.js') }}"></script>
     <script src="{{ asset('assets/vendor/wnumb/wNumb.js') }}"></script>
    <script src="{{ asset('assets/vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/js/dz.carousel.js') }}"></script>
    <script src="{{ asset('assets/vendor/lightgallery/dist/lightgallery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/group-slide/group-loop.js') }}"></script>
    <!-- group JS -->
    <script src="{{ asset('assets/vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js') }}"></script>


    <script src="{{ asset('assets/js/custom.js') }}"></script><!-- CUSTOM JS -->
</body>

</html>
