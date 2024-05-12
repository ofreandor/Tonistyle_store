@extends('website.layouts.app')
@section('content')
<div class="alert">
    @if(session('toast') && session('message'))
    <script>
        Swal.fire({
                        icon: '{{ session('toast') }}',
                        title: '{{ session('message') }}',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        customClass: {
                        content: 'swal-toast-content'
                        },
                        background: '{{ session('toast') === "success" ? "#28a745" : "" }}',
                        color: '{{ session('toast') === "success" ? "#ffffff" : "" }}',
                        zIndex: 9999
                    });
    </script>
    @endif
</div>
    <div class="dz-bnr-inr bg-secondary overlay-black-light" style="background-image:url(images/background/bg1.jpg);">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>Shop with us</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"> Home</a></li>
                            <li class="breadcrumb-item">Shop</li>
                        </ul>
                    </nav>
                </div>
            </div>
    </div>

    <section class="content-inner-3 pt-3 z-index-unset">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xl-12">
                    <div class="filter-wrapper">
                        <div class="filter-left-area">
                            <ul class="filter-tag">
                                <li>
                                    <a href="javascript:void(0);" class="tag-btn">Dresses
                                        <i class="icon feather icon-x tag-close"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="tag-btn">Tops
                                        <i class="icon feather icon-x tag-close"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="tag-btn">Outerwear
                                        <i class="icon feather icon-x tag-close"></i>
                                    </a>
                                </li>
                            </ul>
                            <span>Showing 1–5 Of 50 Results</span>
                        </div>
                        <div class="filter-right-area">
                            <div class="form-group border-0">
                                <a href="javascript:void(0);" class="filter-top-btn" id="filterTopBtn">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 25 25" width="20"
                                        height="20">
                                        <g id="Layer_29" data-name="Layer 29">
                                            <path
                                                d="M2.54,5H15v.5A1.5,1.5,0,0,0,16.5,7h2A1.5,1.5,0,0,0,20,5.5V5h2.33a.5.5,0,0,0,0-1H20V3.5A1.5,1.5,0,0,0,18.5,2h-2A1.5,1.5,0,0,0,15,3.5V4H2.54a.5.5,0,0,0,0,1ZM16,3.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                                            </path>
                                            <path
                                                d="M22.4,20H18v-.5A1.5,1.5,0,0,0,16.5,18h-2A1.5,1.5,0,0,0,13,19.5V20H2.55a.5.5,0,0,0,0,1H13v.5A1.5,1.5,0,0,0,14.5,23h2A1.5,1.5,0,0,0,18,21.5V21h4.4a.5.5,0,0,0,0-1ZM17,21.5a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5v-2a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5Z">
                                            </path>
                                            <path
                                                d="M8.5,15h2A1.5,1.5,0,0,0,12,13.5V13H22.45a.5.5,0,1,0,0-1H12v-.5A1.5,1.5,0,0,0,10.5,10h-2A1.5,1.5,0,0,0,7,11.5V12H2.6a.5.5,0,1,0,0,1H7v.5A1.5,1.5,0,0,0,8.5,15ZM8,11.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                                            </path>
                                        </g>
                                    </svg>
                                    Filter
                                </a>
                            </div>
                            <div class="form-group">
                                <select class="default-select">
                                    <option>Latest</option>
                                    <option>Popularity</option>
                                    <option>Average rating</option>
                                    <option>Latest</option>
                                    <option>Low to high</option>
                                    <option>high to Low</option>
                                </select>
                            </div>
                            <div class="form-group Category">
                                <select class="default-select">
                                    <option>Products</option>
                                    <option>9 Products</option>
                                    <option>12 Products</option>
                                    <option>14 Products</option>
                                    <option>18 Products</option>
                                    <option>24 Products</option>
                                </select>
                            </div>
                            <div class="shop-tab">
                                <ul class="nav" role="tablist" id="dz-shop-tab">
                                    <li class="nav-item" role="presentation">
                                        <a href="#tab-list-list" class="nav-link active" id="tab-list-list-btn"
                                            data-bs-toggle="pill" data-bs-target="#tab-list-list" role="tab"
                                            aria-controls="tab-list-list" aria-selected="true">
                                            <svg width="512" height="512" viewbox="0 0 512 512" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_121_190)">
                                                    <path
                                                        d="M42.667 373.333H96C119.564 373.333 138.667 392.436 138.667 416V469.333C138.667 492.898 119.564 512 96 512H42.667C19.103 512 0 492.898 0 469.333V416C0 392.436 19.103 373.333 42.667 373.333Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M42.667 186.667H96C119.564 186.667 138.667 205.77 138.667 229.334V282.667C138.667 306.231 119.564 325.334 96 325.334H42.667C19.103 325.333 0 306.231 0 282.667V229.334C0 205.769 19.103 186.667 42.667 186.667Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M42.667 0H96C119.564 0 138.667 19.103 138.667 42.667V96C138.667 119.564 119.564 138.667 96 138.667H42.667C19.103 138.667 0 119.564 0 96V42.667C0 19.103 19.103 0 42.667 0Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M230.565 373.333H468.437C492.682 373.333 512.336 392.436 512.336 416V469.333C512.336 492.897 492.682 512 468.437 512H230.565C206.32 512 186.666 492.898 186.666 469.333V416C186.667 392.436 206.32 373.333 230.565 373.333Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M230.565 186.667H468.437C492.682 186.667 512.336 205.77 512.336 229.334V282.667C512.336 306.231 492.682 325.334 468.437 325.334H230.565C206.32 325.334 186.666 306.231 186.666 282.667V229.334C186.667 205.769 206.32 186.667 230.565 186.667Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M230.565 0H468.437C492.682 0 512.336 19.103 512.336 42.667V96C512.336 119.564 492.682 138.667 468.437 138.667H230.565C206.32 138.667 186.666 119.564 186.666 96V42.667C186.667 19.103 206.32 0 230.565 0Z"
                                                        fill="black"></path>
                                                </g>
                                                <defs>
                                                    <clippath id="clip0_121_190">
                                                        <rect width="512" height="512" fill="white"></rect>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#tab-list-column" class="nav-link" id="tab-list-column-btn"
                                            data-bs-toggle="pill" data-bs-target="#tab-list-column" role="tab"
                                            aria-controls="tab-list-column" aria-selected="false">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px"
                                                y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                                xml:space="preserve" width="512" height="512">
                                                <g>
                                                    <path
                                                        d="M85.333,0h64c47.128,0,85.333,38.205,85.333,85.333v64c0,47.128-38.205,85.333-85.333,85.333h-64   C38.205,234.667,0,196.462,0,149.333v-64C0,38.205,38.205,0,85.333,0z">
                                                    </path>
                                                    <path
                                                        d="M362.667,0h64C473.795,0,512,38.205,512,85.333v64c0,47.128-38.205,85.333-85.333,85.333h-64   c-47.128,0-85.333-38.205-85.333-85.333v-64C277.333,38.205,315.538,0,362.667,0z">
                                                    </path>
                                                    <path
                                                        d="M85.333,277.333h64c47.128,0,85.333,38.205,85.333,85.333v64c0,47.128-38.205,85.333-85.333,85.333h-64   C38.205,512,0,473.795,0,426.667v-64C0,315.538,38.205,277.333,85.333,277.333z">
                                                    </path>
                                                    <path
                                                        d="M362.667,277.333h64c47.128,0,85.333,38.205,85.333,85.333v64C512,473.795,473.795,512,426.667,512h-64   c-47.128,0-85.333-38.205-85.333-85.333v-64C277.333,315.538,315.538,277.333,362.667,277.333z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#tab-list-grid" class="nav-link" id="tab-list-grid-btn"
                                            data-bs-toggle="pill" data-bs-target="#tab-list-grid" role="tab"
                                            aria-controls="tab-list-grid" aria-selected="false">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2" x="0px"
                                                y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                                xml:space="preserve" width="512" height="512">
                                                <g>
                                                    <path
                                                        d="M42.667,373.333H96c23.564,0,42.667,19.103,42.667,42.667v53.333C138.667,492.898,119.564,512,96,512H42.667   C19.103,512,0,492.898,0,469.333V416C0,392.436,19.103,373.333,42.667,373.333z">
                                                    </path>
                                                    <path
                                                        d="M416,373.333h53.333C492.898,373.333,512,392.436,512,416v53.333C512,492.898,492.898,512,469.333,512H416   c-23.564,0-42.667-19.102-42.667-42.667V416C373.333,392.436,392.436,373.333,416,373.333z">
                                                    </path>
                                                    <path
                                                        d="M42.667,186.667H96c23.564,0,42.667,19.103,42.667,42.667v53.333c0,23.564-19.103,42.667-42.667,42.667H42.667   C19.103,325.333,0,306.231,0,282.667v-53.333C0,205.769,19.103,186.667,42.667,186.667z">
                                                    </path>
                                                    <path
                                                        d="M416,186.667h53.333c23.564,0,42.667,19.103,42.667,42.667v53.333c0,23.564-19.102,42.667-42.667,42.667H416   c-23.564,0-42.667-19.103-42.667-42.667v-53.333C373.333,205.769,392.436,186.667,416,186.667z">
                                                    </path>
                                                    <path
                                                        d="M42.667,0H96c23.564,0,42.667,19.103,42.667,42.667V96c0,23.564-19.103,42.667-42.667,42.667H42.667   C19.103,138.667,0,119.564,0,96V42.667C0,19.103,19.103,0,42.667,0z">
                                                    </path>
                                                    <path
                                                        d="M229.333,373.333h53.333c23.564,0,42.667,19.103,42.667,42.667v53.333c0,23.564-19.103,42.667-42.667,42.667h-53.333   c-23.564,0-42.667-19.102-42.667-42.667V416C186.667,392.436,205.769,373.333,229.333,373.333z">
                                                    </path>
                                                    <path
                                                        d="M229.333,186.667h53.333c23.564,0,42.667,19.103,42.667,42.667v53.333c0,23.564-19.103,42.667-42.667,42.667h-53.333   c-23.564,0-42.667-19.103-42.667-42.667v-53.333C186.667,205.769,205.769,186.667,229.333,186.667z">
                                                    </path>
                                                    <path
                                                        d="M229.333,0h53.333c23.564,0,42.667,19.103,42.667,42.667V96c0,23.564-19.103,42.667-42.667,42.667h-53.333   c-23.564,0-42.667-19.103-42.667-42.667V42.667C186.667,19.103,205.769,0,229.333,0z">
                                                    </path>
                                                    <path
                                                        d="M416,0h53.333C492.898,0,512,19.103,512,42.667V96c0,23.564-19.102,42.667-42.667,42.667H416   c-23.564,0-42.667-19.103-42.667-42.667V42.667C373.333,19.103,392.436,0,416,0z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 shop-top-filter">
                        <a href="javascript:void(0);" class="panel-close-btn">
                            <svg width="35" height="35" viewbox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M37.748 12.5L12.748 37.5" stroke="white" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M12.748 12.5L37.748 37.5" stroke="white" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </a>
                        <div class="shop-filter mt-xl-2 mt-0 " id="shopFilter">
                            <aside>
                                <div class="d-flex d-xl-none align-items-center justify-content-between m-b30">
                                    <h6 class="title mb-0 fw-normal">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 25 25" width="20"
                                            height="20">
                                            <g id="Layer_28" data-name="Layer 28">
                                                <path
                                                    d="M2.54,5H15v.5A1.5,1.5,0,0,0,16.5,7h2A1.5,1.5,0,0,0,20,5.5V5h2.33a.5.5,0,0,0,0-1H20V3.5A1.5,1.5,0,0,0,18.5,2h-2A1.5,1.5,0,0,0,15,3.5V4H2.54a.5.5,0,0,0,0,1ZM16,3.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                                                </path>
                                                <path
                                                    d="M22.4,20H18v-.5A1.5,1.5,0,0,0,16.5,18h-2A1.5,1.5,0,0,0,13,19.5V20H2.55a.5.5,0,0,0,0,1H13v.5A1.5,1.5,0,0,0,14.5,23h2A1.5,1.5,0,0,0,18,21.5V21h4.4a.5.5,0,0,0,0-1ZM17,21.5a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5v-2a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5Z">
                                                </path>
                                                <path
                                                    d="M8.5,15h2A1.5,1.5,0,0,0,12,13.5V13H22.45a.5.5,0,1,0,0-1H12v-.5A1.5,1.5,0,0,0,10.5,10h-2A1.5,1.5,0,0,0,7,11.5V12H2.6a.5.5,0,1,0,0,1H7v.5A1.5,1.5,0,0,0,8.5,15ZM8,11.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                                                </path>
                                            </g>
                                        </svg>
                                        Filter
                                    </h6>
                                </div>
                                <div class="widget widget_search">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="dzSearch" required="required" type="search" class="form-control"
                                                placeholder="Search Product">
                                            <div class="input-group-addon">
                                                <button name="submit" value="Submit" type="submit" class="btn">
                                                    <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z"
                                                            stroke="#0D775E" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M17.5 17.5L13.875 13.875" stroke="#0D775E" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h6 class="widget-title">Price</h6>
                                    <div class="price-slide range-slider">
                                        <div class="price">
                                            <div class="range-slider style-1">
                                                <div id="slider-tooltips2" class="mb-3"></div>
                                                <span class="example-val" id="slider-margin-value-min2"></span>
                                                <span class="example-val" id="slider-margin-value-max2"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </aside>
                        </div>
                    </div>

                        {{-- @if ($cartItemCount > 0)
                                <span class="badge badge-circle" id="cartCounter">{{ $cartItemCount }}</span>
                        @endif --}}

                    <div class="row">


                        @foreach ($products as $product)


                            <div class="col-md-3 py-2">
                                <div class="shop-card style-1" style="border: 1px solid #ccc; padding: 11px;">
                                    <div class="dz-media">
                                        @if ($product->productImages->isNotEmpty())
                                        <a href="{{ route('product.details', $product->id) }}">
                                              <img src="{{ asset($product->productImages->first()->product_image) }}" alt="image"
                                            style="max-width: 100%; height: auto;">
                                        </a>
                                        @else
                                        No Image Available
                                        @endif

                                    </div>
                                    <div class="" style="display: flex; justify-content: space-between; align-items: center; margin-top:5px;">
                                           <form class="addToCartForm" action="{{ route('add.cart', $product->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <input type="hidden" name="quantity" value="1">

                                                <button type="submit" class="btn btn-secondary btn-sm btn-rounded dz-add-to-cart" style="font-size:11px;">

                                                    <span class="d-md-block d-none"><i class="iconly-Broken-Buy" style="font-size:13px;"></i> Add To Cart</span>
                                                </button>
                                            </form>
                                        </div>
                                    <div class="row" style="margin-top:5px;">
                                        <span class="text-muted" style="font-size: 12px;"><a href="{{ route('product.details', $product->id) }}">{{
                                                $product->product_name }}</a></span>

                                        <h5 class="price mr-1 py-2" style="font-size: 15px;"><span>Price: </span>&#8358; {{ number_format($product->selling_price) }} </h5> <del>&#8358; {{ number_format($product->price) }}</del>

                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

    </section>

    @section('scripts')
    <script>
            $(document).ready(function() {
                    $.ajax({
                        type: 'POST',
                        url: formAction,
                        data: formData,
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: response.message,
                                    position: 'top-end',
                                    toast: true,
                                    showConfirmButton: false,
                                    timer: 3000
                                });
                                $('#cartCounter').text(response.cartItemCount);
                            }
                        },
                        error: function(xhr, status, error) {

                        }
                    });
            });

    </script>
    @endsection
@endsection
