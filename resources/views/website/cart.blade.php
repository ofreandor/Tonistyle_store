@extends('website.layouts.app')
@section('content')
<style>



    #close-btn{
        border-radius: 70%;
        background-color: #000;
        color:#fff;
        width: 40px;
        height: 40px;
        font-size:22px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 5px;
    }


</style>
    <div class="dz-bnr-inr bg-secondary overlay-black-light" style="background-image:url(images/background/bg1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Shopping Cart</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home</a></li>
                        <li class="breadcrumb-item">Shopping Cart</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <section class="content-inner shop-account">
        <!-- Product -->
        <div class="container">
            <div class="row">
                <div class="col-lg-11">
                    <div class="table-responsive">
                        <table class="table check-tbl">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th></th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                    @php
                                    $total = 0;
                                    $userCart = [];
                                    @endphp

                                @if (Auth::check())
                                    @php
                                        $userId = Auth::id();
                                        $userCart = \App\Models\Cart::where('user_id', $userId)->get();
                                    @endphp

                                    @foreach ($userCart as $cartItem)
                                        @php
                                        $cartIsEmpty = false;
                                        $product = \App\Models\Product::find($cartItem->product_id);
                                        $total += $product->selling_price * $cartItem->quantity;
                                        @endphp


                                    <tr class="product-item-row">
                                        <td class="product-item-img">
                                            @if ($product->productImages->isNotEmpty())
                                            <img src="{{ asset($product->productImages->first()->product_image) }}" alt="">
                                            @else
                                            Image
                                            @endif
                                        </td>

                                        <td class="product-item-name" style="font-size:15px; width:700px;">{{ $product->product_name }}</td>
                                        <td class="product-item-price" style="font-size:15px; width:700px;">&#8358 {{ number_format($product->selling_price)
                                            }}</td>
                                        <td class="product-item-quantity" style="font-size:16px; width:170px;" data-th="Quantity">
                                            <div class="style-1">
                                                <input type="number" value="{{ $cartItem->quantity }}" name="quantity"
                                                    class="form-control quantity cart_update" min="1" data-price="{{ $product->selling_price }}"
                                                    data-product-id="{{ $product->id }}">
                                            </div>
                                        </td>
                                        <td class="product-item-close">
                                            <form action="{{ route('cart.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="quantity btn-quantity style-1">
                                                    <button type="submit" class="" id="close-btn">x</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>

                                    @endforeach
                                    @else
                                    @foreach ((array) session('cart') as $id => $details)
                                    @php
                                        $cartIsEmpty = false;
                                        $product = \App\Models\Product::find($details['product_id']); // Assuming your product model is named Product
                                        $total += $product->selling_price * $details['quantity'];
                                    @endphp

                                    <tr class="product-item-row">
                                        <td class="product-item-img">
                                            @if ($product->productImages->isNotEmpty())
                                            <img src="{{ asset($product->productImages->first()->product_image) }}" alt="">
                                            @else
                                            Image
                                            @endif
                                        </td>

                                        <td class="product-item-name" style="font-size:15px; width:700px;">{{ $product->product_name }}</td>
                                        <td class="product-item-price" style="font-size:15px; width:700px;">&#8358 {{ number_format($product->selling_price)
                                            }}</td>
                                        <td class="product-item-quantity" style="font-size:16px; width:170px;" data-th="Quantity">
                                            <div class="style-1">
                                                <input type="number" value="{{ $details['quantity'] }}" name="quantity"
                                                    class="form-control quantity cart_update" min="1" data-price="{{ $product->selling_price }}"
                                                    data-product-id="{{ $product->id }}">
                                            </div>
                                        </td>
                                        <td class="product-item-close">
                                            <form action="{{ route('cart.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="quantity btn-quantity style-1">
                                                    <button type="submit" class="" id="close-btn">x</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @if (!$cartIsEmpty)
                                        <tr>No items in the cart.</tr>
                                    @endif

                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row shop-form m-t30">
                        <div class="col-md-7">
                            <label for="">
                                <h3>Total:</h3>
                            </label>
                            <p style="font-size:25px; display: inline-block; vertical-align: middle; color:#000; padding-top:8px; font-family:'Ubuntu'; font-weight:600" id="cart-total">&#8358 {{
                                number_format($total) }}</p>
                        </div>
                        <div class="col-md-5 text-end">


                                <a href="{{ route('place.order') }}"  class="btn btn-secondary">Check Out</a>

                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- Product END -->
    </section>
    <!-- contact area End-->

    @section('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
         <script src="https://js.paystack.co/v1/inline.js"></script>
            <script>
                $(document).ready(function() {
                    $('.cart_update').on('change', function() {
                        var productId = $(this).data('product-id');
                        var quantity = $(this).val();
                        var price = $(this).data('price');

                        $.ajax({
                            url: '{{ route("update.cart") }}',
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                product_id: productId,
                                quantity: quantity
                            },
                            success: function(response) {
                                $('#cart-total').text('₦ ' + response.total);
                                // Update individual product total price
                                var productTotal = price * quantity;
                                $(this).closest('.product-item-row').find('.product-item-price').text('₦ ' + productTotal.toFixed(2));
                            }
                        });
                    });
                });
            </script>

    @endsection
@endsection
