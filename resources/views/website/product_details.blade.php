@extends('website.layouts.app')
@section('content')

    <div class="d-flex justify-content-between container-fluid py-3 bg-light">
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                    <li class="breadcrumb-item">Product Full Width</li>
                </ul>
            </nav>
    </div>


        <section class="content-inner py-0 bg-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="dz-product-detail sticky-top style-3">
                                <div class="swiper-btn-center-lr">
                                    <div class="swiper product-gallery-swiper2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{asset($product->productImages->first()->product_image) }}" alt="image">
                                            </div>
                                            @if ($product->productImages->count() >= 2)
                                                <div class="swiper-slide">
                                                    <img src="{{ asset($product->productImages->skip(1)->first()->product_image) }}" alt="image">
                                                    @else
                                                    <p></p>
                                                    @endif
                                                </div>
                                            <div class="swiper-slide">

                                                @if ($product->productImages->count() >= 3)
                                                <img src="{{ asset($product->productImages->skip(2)->first()->product_image) }}" alt="image">
                                                @else
                                               <p></p>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper product-gallery-swiper thumb-swiper-lg swiper-vertical">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{asset($product->productImages->first()->product_image) }}" alt="image">
                                            </div>
                                            <div class="swiper-slide">
                                                @if ($product->productImages->count() >= 2)
                                                <img src="{{ asset($product->productImages->skip(1)->first()->product_image) }}" alt="image">
                                                @else
                                                    <p></p>
                                                @endif

                                            </div>
                                            <div class="swiper-slide">
                                                @if ($product->productImages->count() >= 3)
                                                    <img src="{{ asset($product->productImages->skip(2)->first()->product_image) }}" alt="image">
                                                @else
                                                    <p></p>
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="dz-product-detail style-2 p-t50 bg-transparent">
                                <div class="dz-content">
                                    <div class="dz-content-footer">
                                        <div class="dz-content-start">
                                            <span class="badge bg-secondary mb-2">SALE 20% Off</span>
                                            <h6 class="mb-1 h6"><a href="javascript:void(0);">{{ $product->product_name }}</a></h6>
                                            <div class="review-num">
                                                <ul class="dz-rating me-2">
                                                    <li>
                                                        <svg width="14" height="13" viewbox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="13" viewbox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="13" viewbox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="13" viewbox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.2"
                                                                d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                fill="#5E626F"></path>
                                                        </svg>

                                                    </li>
                                                    <li>
                                                        <svg width="14" height="13" viewbox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.2"
                                                                d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                fill="#5E626F"></path>
                                                        </svg>
                                                    </li>
                                                </ul>
                                                <span class="text-secondary me-2">4.7 Rating</span>
                                                <a href="javascript:void(0);">(5 customer reviews)</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-text">
                                        {{ $product->description }}
                                    </p>
                                    <div class="meta-content m-b20 d-flex align-items-end">
                                        <div class="me-3">
                                            <span class="form-label">Price</span>
                                            <span class="price">&#8358; {{ number_format($product->selling_price) }} <del style="margin-left:5px;"> &#8358; {{ number_format($product->price) }}</del></span>
                                        </div>
                                        <div class="btn-quantity quantity-sm light d-xl-none d-blcok d-sm-block">
                                            <label class="form-label">Quantity</label>
                                            <input type="text" value="1" name="demo_vertical2">
                                        </div>
                                    </div>

                                        <div class="product-num">
                                            <div class="btn-quantity light d-xl-block d-sm-none d-none">
                                                <label class="form-label">Quantity</label>
                                                <div class="input-group bootstrap-touchspin">
                                                    <span class="input-group-addon bootstrap-touchspin-prefix"style="display: none;">
                                                    </span>
                                                    <input type="text" class="form-control" value="1" style="display: block; font-size:17px; font-weight:700;" id="quantity_input">

                                                    <span class="input-group-addon bootstrap-touchspin-postfix"
                                                        style="display: none;">
                                                    </span>

                                                    <span class="input-group-btn-vertical">
                                                        <button class="btn btn-default bootstrap-touchspin-up" type="button" id="plus_btn">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </button>

                                                        <button class="btn btn-default bootstrap-touchspin-down" type="button" id="minus_btn">
                                                            <i class="fa-solid fa-minus"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>


                                        </div>

                                    <div class="btn-group cart-btn">
                                            <form action="" method="POST">


                                                <a href="" class="btn btn-secondary text-uppercase">Add To Cart</a>
                                            </form>
                                        <a href="shop-wishlist.html" class="btn btn-outline-secondary btn-icon">
                                            <svg width="19" height="17" viewbox="0 0 19 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.24805 16.9986C8.99179 16.9986 8.74474 16.9058 8.5522 16.7371C7.82504 16.1013 7.12398 15.5038 6.50545 14.9767L6.50229 14.974C4.68886 13.4286 3.12289 12.094 2.03333 10.7794C0.815353 9.30968 0.248047 7.9162 0.248047 6.39391C0.248047 4.91487 0.755203 3.55037 1.67599 2.55157C2.60777 1.54097 3.88631 0.984375 5.27649 0.984375C6.31552 0.984375 7.26707 1.31287 8.10464 1.96065C8.52734 2.28763 8.91049 2.68781 9.24805 3.15459C9.58574 2.68781 9.96875 2.28763 10.3916 1.96065C11.2292 1.31287 12.1807 0.984375 13.2197 0.984375C14.6098 0.984375 15.8885 1.54097 16.8202 2.55157C17.741 3.55037 18.248 4.91487 18.248 6.39391C18.248 7.9162 17.6809 9.30968 16.4629 10.7792C15.3733 12.094 13.8075 13.4285 11.9944 14.9737C11.3747 15.5016 10.6726 16.1001 9.94376 16.7374C9.75136 16.9058 9.50417 16.9986 9.24805 16.9986ZM5.27649 2.03879C4.18431 2.03879 3.18098 2.47467 2.45108 3.26624C1.71033 4.06975 1.30232 5.18047 1.30232 6.39391C1.30232 7.67422 1.77817 8.81927 2.84508 10.1066C3.87628 11.3509 5.41011 12.658 7.18605 14.1715L7.18935 14.1743C7.81021 14.7034 8.51402 15.3033 9.24654 15.9438C9.98344 15.302 10.6884 14.7012 11.3105 14.1713C13.0863 12.6578 14.6199 11.3509 15.6512 10.1066C16.7179 8.81927 17.1938 7.67422 17.1938 6.39391C17.1938 5.18047 16.7858 4.06975 16.045 3.26624C15.3152 2.47467 14.3118 2.03879 13.2197 2.03879C12.4197 2.03879 11.6851 2.29312 11.0365 2.79465C10.4585 3.24179 10.0558 3.80704 9.81975 4.20255C9.69835 4.40593 9.48466 4.52733 9.24805 4.52733C9.01143 4.52733 8.79774 4.40593 8.67635 4.20255C8.44041 3.80704 8.03777 3.24179 7.45961 2.79465C6.811 2.29312 6.07643 2.03879 5.27649 2.03879Z"
                                                    fill="black"></path>
                                            </svg>
                                            Add To Wishlist
                                        </a>
                                    </div>
                                    <div class="dz-info">
                                        <ul>
                                            <li><strong>SKU:</strong></li>
                                            <li>{{ $product->product_code }}</li>
                                        </ul>
                                        <ul>
                                            <li><strong>Category:</strong></li>
                                            <li><a href="shop-standard.html">Dresses,</a></li>
                                            <li><a href="shop-standard.html">Jeans,</a></li>
                                            <li><a href="shop-standard.html">Swimwear,</a></li>
                                            <li><a href="shop-standard.html">Summer,</a></li>
                                            <li><a href="shop-standard.html">Clothing,</a></li>
                                        </ul>
                                        <ul>
                                            <li><strong>Tags:</strong></li>
                                            <li><a href="shop-standard.html">Casual,</a></li>
                                            <li><a href="shop-standard.html">Athletic,</a></li>
                                            <li><a href="shop-standard.html">Workwear,</a></li>
                                            <li><a href="shop-standard.html">Accessories,</a></li>
                                        </ul>
                                        <ul class="social-icon">
                                            <li><strong>Share:</strong></li>
                                            <li>
                                                <a href="https://www.facebook.com/dexignzone" target="_blank">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/showcase/3686700/admin/" target="_blank">
                                                    <i class="fa-brands fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/dexignzone/" target="_blank">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/dexignzones" target="_blank">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


@section('scripts')
        <script>
                document.addEventListener('DOMContentLoaded', function() {
                const minusBtn = document.querySelector('#minus_btn');
                const plusBtn = document.querySelector('#plus_btn');
                const quantityInput = document.querySelector('#quantity_input');

                minusBtn.addEventListener('click', function() {
                // Decrease quantity by 1 if it's greater than 1
                if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
                }
                });

                plusBtn.addEventListener('click', function() {
                // Increase quantity by 1
                quantityInput.value = parseInt(quantityInput.value) + 1;
                });
                });
        </script>
<script src="{{ asset('assets/vendor/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('assets/vendor/counter/counterup.min.js') }}"></script>
@endsection
@endsection

