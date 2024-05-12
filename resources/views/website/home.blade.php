@extends('website.layouts.app')
@section('content')
    <!--Swiper Banner Start -->
    <div class="main-slider style-2">
        <div class="main-swiper2">
            <div class="container">
                <div class="banner-content">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-12 align-self-center">
                            <div class="swiper-content">
                                <div class="content-info">
                                    <h3 class="h5 offer-title mb-0" data-swiper-parallax="-20"> Welcome to the
                                        ultimate <span style="color:#292691">online shopping</span> <span
                                            class="text-primary d-flex align-items-center"><svg class="m-r10"
                                                xmlns="http://www.w3.org/2000/svg" width="68" height="68"
                                                viewbox="0 0 68 68" fill="none">
                                                <path
                                                    d="M34 0L43.6167 24.3833L68 34L43.6167 43.6167L34 68L24.3833 43.6167L0 34L24.3833 24.3833L34 0Z"
                                                    fill=" "></path>
                                            </svg></span>
                                    </h3>
                                    <p class="sub-title mb-0" data-swiper-parallax="-40">No code need. Plus free
                                        shippng on <span>$99+</span> orders!</p>
                                </div>
                                <div class="content-btn" data-swiper-parallax="-60">
                                    <a class="btn btn-secondary  me-3" href="">Products</a>
                                    <a class="btn btn-outline-secondary" href="{{ route('shop') }}">Start Shopping</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-12">
                            <div class="banner-media">
                                <div class="shap"></div>
                                <div class="border-shap"></div>
                                <div class="border-shap2"></div>

                                <div class="img-preview" data-swiper-parallax="-100">
                                    <img src="{{ asset('assets/images/main-slider/slider2/pic1.png') }}" alt="banner-media">
                                </div>
                                <div class="bnr-content-bx slideskew">
                                    <div class="dz-media">
                                        <img src="{{ asset('assets/images/shop/product/small/1.png') }}" alt="">
                                    </div>
                                    <div class="dz-info">
                                        <h5 class="dz-title">Cozy Knit Cardigan</h5>
                                        <h6 class="price text-primary">$80</h6>
                                        <div class="btn btn-warning meta-icon dz-carticon">
                                            <i class="flaticon flaticon-basket"></i>
                                            <i class="flaticon flaticon-basket-on dz-heart-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="bnr-customer-bx slideskew">
                                    <i class="icon feather icon-heart-on dz-heart"></i>
                                    <ul>
                                        <li class="customer-image">
                                            <img src="{{ asset('assets/images/testimonial/testimonial1.jpg') }}" alt="">
                                        </li>
                                        <li class="customer-image">
                                            <img src="{{ asset('assets/images/testimonial/testimonial2.jpg') }}" alt="">
                                        </li>
                                        <li class="customer-image">
                                            <img src="{{ asset('assets/images/testimonial/testimonial3.jpg') }}" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <ul class="star-list">
                                    <li class="star-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewbox="0 0 57 57"
                                            fill="none">
                                            <path
                                                d="M28.5 0L33.3366 23.6634L57 28.5L33.3366 33.3366L28.5 57L23.6634 33.3366L0 28.5L23.6634 23.6634L28.5 0Z"
                                                fill="var(--rgba-primary-2)"></path>
                                        </svg>
                                    </li>
                                    <li class="star-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewbox="0 0 57 57"
                                            fill="none">
                                            <path
                                                d="M28.5 0L33.3366 23.6634L57 28.5L33.3366 33.3366L28.5 57L23.6634 33.3366L0 28.5L23.6634 23.6634L28.5 0Z"
                                                fill="var(--rgba-primary-2)"></path>
                                        </svg>
                                    </li>
                                    <li class="star-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewbox="0 0 57 57"
                                            fill="none">
                                            <path
                                                d="M28.5 0L33.3366 23.6634L57 28.5L33.3366 33.3366L28.5 57L23.6634 33.3366L0 28.5L23.6634 23.6634L28.5 0Z"
                                                fill="var(--rgba-primary-2)"></path>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--Featured Section Start-->
    <div class="content-inner category-section">
        <div class="container">
            <div class="row gx-xl-4 g-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="category-product left product-1">
                        <a href="">
                            <img src="{{ asset('assets/images/category/pic1.jpg') }}" alt="">
                            <div class="category-badge">Jacket</div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="category-product left product-2">
                        <a href="">
                            <img src="{{ asset('assets/images/category/pic2.jpg') }}" alt="">
                            <div class="category-badge">Jeans</div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="category-product left product-3">
                        <a href="">
                            <img src="{{ asset('assets/images/category/pic3.jpg') }}" alt="">
                            <div class="category-badge">Shirts</div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="category-product right product-4">
                        <a href="">
                            <img src="{{ asset('assets/images/category/pic4.jpg') }}" alt="">
                            <div class="category-badge">Shorts</div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="category-product right product-5">
                        <a href="">
                            <img src="{{ asset('assets/images/category/pic5.jpg') }}" alt="">
                            <div class="category-badge">t-shirt</div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="category-product right product-6">
                        <a href="">
                            <img src="{{ asset('assets/images/category/pic6.jpg') }}" alt="">
                            <div class="category-badge">Blazer</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <a class="icon-button" href="">
            <div class="text-row word-rotate-box c-black border-white">
                <span class="word-rotate">category - category -</span>
                <svg class="badge__emoji" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40"
                    fill="none">
                    <g clip-path="url(#clip0_161_568)">
                        <path
                            d="M10.7239 31.3072L19.0059 39.5891C19.2696 39.8523 19.627 40.0001 19.9995 40.0001C20.3721 40.0001 20.7295 39.8523 20.9932 39.5891L29.2752 31.3072C29.4582 31.1236 29.5608 30.8748 29.5606 30.6156C29.5604 30.3564 29.4573 30.1078 29.274 29.9245C29.0907 29.7412 28.8421 29.6381 28.5829 29.6379C28.3237 29.6377 28.075 29.7404 27.8913 29.9234L20.9781 36.8368V0.978516C20.9781 0.718997 20.875 0.470108 20.6915 0.286601C20.508 0.103093 20.2591 0 19.9995 0C19.74 0 19.4911 0.103093 19.3076 0.286601C19.1241 0.470108 19.021 0.718997 19.021 0.978516V36.8368L12.1077 29.9234C11.9241 29.7404 11.6754 29.6377 11.4162 29.6379C11.1569 29.6381 10.9084 29.7412 10.7251 29.9245C10.5418 30.1078 10.4387 30.3564 10.4385 30.6156C10.4383 30.8748 10.5409 31.1236 10.7239 31.3072Z"
                            fill="#000"></path>
                    </g>
                    <defs>
                        <clippath id="clip0_161_568">
                            <rect width="40" height="40" fill="#000"></rect>
                        </clippath>
                    </defs>
                </svg>
            </div>
        </a>
    </div>
    <!--Featured Section End-->



    <section class="content-inner">
        <div class="container">
            <div class=" row justify-content-md-between align-items-start">
                <div class="col-lg-6 col-md-12">
                    <div class="section-head style-1 m-b30  wow fadeInUp" data-wow-delay="0.2s">
                        <div class="left-content">
                            <h2 class="title">Most popular products</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="site-filters clearfix style-1 align-items-center wow fadeInUp ms-lg-auto"
                        data-wow-delay="0.4s">
                        <ul class="filters" data-bs-toggle="buttons">
                            <li class="btn active">
                                <input type="radio">
                                <a href="javascript:void(0);">ALL</a>
                            </li>
                            <li data-filter=".Dresses" class="btn">
                                <input type="radio">
                                <a href="javascript:void(0);">Dresses</a>
                            </li>
                            <li data-filter=".Tops" class="btn">
                                <input type="radio">
                                <a href="javascript:void(0);">Tops</a>
                            </li>
                            <li data-filter=".Outerwear" class="btn">
                                <input type="radio">
                                <a href="javascript:void(0);">Outerwear</a>
                            </li>
                            <li data-filter=".Jacket" class="btn">
                                <input type="radio">
                                <a href="javascript:void(0);">Jacket</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <ul id="masonry" class="row g-xl-4 g-3">
                    @foreach ($products as $product)
                    <li class="card-container col-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Tops wow fadeInUp"
                        data-wow-delay="2.0s">
                        <div class="shop-card">
                            <div class="dz-media">
                                @if ($product->productImages->isNotEmpty())
                                <img src="{{ asset($product->productImages->first()->product_image) }}" alt="image">
                                @else
                                    No Image Available
                                @endif
                                <div class="shop-meta">
                                    <a href="{{ route('product.details', $product->id) }}" class="btn btn-secondary btn-md btn-rounded"
                                        >
                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                        <span class="d-md-block d-none">Quick View</span>
                                    </a>

                                </div>
                            </div>
                            <div class="dz-content">
                                <h5 class="title" style="font-size: 14px;"><a href="">{{ $product->product_name }}</a></h5>
                                <h5 class="price">{{number_format($product->selling_price)  }}</h5>
                            </div>
                            <div class="product-tag">
                                <span class="badge ">Get 20% Off</span>
                            </div>
                        </div>
                    </li>

                @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!-- Products Section Start-->

    <!-- Feature Box -->
    {{-- <div class="content-inner py-0  image-wrapper">
        <div class="container-fluid px-0">
            <div class="row gx-0">

                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.2s">
                    <div class="insta-post dz-media dz-img-effect rotate">
                        <a href="">
                            <img src="images/clothe/feature/2.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="insta-post dz-media dz-img-effect rotate">
                        <a href="">
                            <img src="images/clothe/feature/3.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.4s">
                    <div class="insta-post dz-media dz-img-effect rotate">
                        <a href="">
                            <img src="images/clothe/feature/4.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="insta-post dz-media dz-img-effect rotate">
                        <a href="">
                            <img src="images/clothe/feature/5.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="insta-post dz-media dz-img-effect rotate">
                        <a href="">
                            <img src="images/clothe/feature/6.png" alt="">
                        </a>
                    </div>
                </div>
                <a href="https://www.instagram.com/tonistyle store/" class="instagram-link">
                    <div class="follow-link  wow bounceIn" data-wow-delay="0.1s">
                        <div class="follow-link-icon">
                            <img src="images/insta-follow.png" alt="">
                        </div>
                        <div class="follow-link-content">
                            <p class="m-0">Follow @</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div> --}}
    <!-- Feature Box End -->
@endsection
