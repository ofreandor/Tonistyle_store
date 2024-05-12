@extends('website.layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
@endsection
@section('content')
    <div class="dz-bnr-inr bg-secondary overlay-black-light" style="background-image:url(../assets/images/background/bg1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Shop Checkout</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                        <li class="breadcrumb-item">Shop Checkout</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>



		<div class="content-inner-1">
			<div class="container">
				<div class="row shop-checkout">
					<div class="col-xl-8">
						<h4 class="title m-b15">Shipping  Information</h4>
						<div class="accordion dz-accordion accordion-sm" id="accordionFaq">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
									<a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										You can update shipping information on edit of data
										<span class="toggle-close"></span>
									</a>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFaq">
									<div class="accordion-body">
										<p class="m-b0">If your order has not yet shipped, you can contact us to change your shipping address</p>
									</div>
								</div>
							</div>

						</div>
						<form class="row">
							<div class="col-md-6">
								<div class="form-group m-b25">
									<label class="label-title">First Name</label>
									<input name="dzName" required="" class="form-control" value="{{ Auth::user()->first_name }}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group m-b25">
									<label class="label-title">Last Name</label>
									<input name="dzName" required="" class="form-control" value="{{ Auth::user()->last_name }}">
								</div>
							</div>

                            <div class="col-md-6">
                                    <div class="form-group m-b25">
                                        <label class="label-title">Phone</label>
                                        <input name="dzName" required="" class="form-control" value="{{ Auth::user()->phone }}">
                                    </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group m-b25">
                                        <label class="label-title">Email</label>
                                        <input name="dzName" required="" class="form-control" value="{{ Auth::user()->email }}">
                                    </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group m-b25">
                                    <label class="label-title">State</label>
                                    <select name="" id="" class="form-select">
                                        <option disabled="" selected="">Select State</option>
                                        <option value="Abia">Abia</option>
                                        <option value="Adamawa">Adamawa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-b25">
                                    <label class="label-title">City (LGA)</label>
                                    <select name="" id="" class="form-select">
                                            <option disabled="" selected="">Select State</option>
                                            <option value="Abia">Umuahia</option>
                                            <option value="Yola">Yola</option>
                                    </select>
                                </div>
                            </div>


							<div class="col-md-12">
								<div class="form-group m-b25">
									<label class="label-title">Delivery address *</label>
									<input name="dzName" required="" class="form-control m-b15" placeholder="House number and street name">
								</div>
							</div>

                            <div class="col-md-12">
                                    <div class="form-group m-b25">
                                        <label class="label-title">Alternative address *</label>
                                        <input name="dzName" required="" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)">
                                    </div>
                                </div>

							<div class="col-md-12">
								<div class="form-group m-b25">
									<label class="label-title">ZIP Code *</label>
									<input name="dzName" required="" class="form-control">
								</div>
							</div>


							<div class="col-md-12 m-b25">
								<div class="form-group">
									<label class="label-title">Order notes (optional)</label>
									<textarea id="comments" placeholder="Notes about your order, e.g. special notes for delivery." class="form-control" name="comment" cols="90" rows="5" required="required"></textarea>
								</div>
							</div>
						</form>
					</div>
					<div class="col-xl-4 side-bar">
						<h4 class="title m-b15">Your Order</h4>
						<div class="order-detail sticky-top">
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
							<div class="cart-item style-1">
								<div class="dz-media">
                                        @if ($product->productImages->isNotEmpty())
                                        <img src="{{ asset($product->productImages->first()->product_image) }}" alt="">
                                        @else
                                        Image
                                        @endif
								</div>
								<div class="dz-content">
									<h6 class="title mb-0">{{ $product->product_name }} </h6>
									<span class="price">&#8358 {{ number_format($product->selling_price)}}</span>
								</div>
							</div>
                            @endforeach
                            @endif
							<table>
								<tbody>
									<tr class="subtotal">
										<td>Subtotal</td>
										<td class="price">$100</td>
									</tr>
									<tr class="title">
										<td><h6 class="title font-weight-500">Shipping</h6></td>
										<td></td>
									</tr>
									<tr class="shipping">
										<td>
											<div class="custom-control custom-checkbox">
											  <input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
											  <label class="form-check-label" for="flexRadioDefault1">
												Free shipping
											  </label>
											</div>
											<div class="custom-control custom-checkbox">
											  <input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
											  <label class="form-check-label" for="flexRadioDefault2">
												Flat Rate:
											  </label>
											</div>
										</td>
										<td class="price">25.75</td>
									</tr>
									<tr class="total">
										<td>Total</td>
										<td class="price">$125.75</td>

									</tr>
								</tbody>
							</table>

							<div class="accordion dz-accordion accordion-sm" id="accordionFaq1">
								<div class="accordion-item">
									<div class="accordion-header" id="heading1">
										<div class="accordion-button collapsed custom-control custom-checkbox border-0" data-bs-toggle="collapse" data-bs-target="#collapse1" role="navigation" aria-expanded="true" aria-controls="collapse1">
											<input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
											<label class="form-check-label" for="flexRadioDefault3">
												Direct bank transfer
											</label>
										</div>
									</div>
									<div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-header" id="heading2">
										<div class="accordion-button collapsed custom-control custom-checkbox border-0" data-bs-toggle="collapse" data-bs-target="#collapse2" role="navigation" aria-expanded="true" aria-controls="collapse2">
											<input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
											<label class="form-check-label" for="flexRadioDefault5">
												Cash on delivery
											</label>
										</div>
									</div>
									<div id="collapse2" class="accordion-collapse collapse" aria-labelledby="collapse2" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-header" id="heading3">
										<div class="accordion-button collapsed custom-control custom-checkbox border-0" data-bs-toggle="collapse" data-bs-target="#collapse3" role="navigation" aria-expanded="true" aria-controls="collapse3">
											<input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
											<label class="form-check-label" for="flexRadioDefault4">
												Paypal
											</label>
											<img src="images/shop/payment.jpg" alt="/">
											<a href="javascript:void(0);">What is PayPal?</a>
										</div>
									</div>
									<div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>
							</div>
							<p class="text">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="javascript:void(0);">privacy policy.</a></p>
							<div class="form-group">
								<div class="custom-control custom-checkbox d-flex m-b15">
									<input type="checkbox" class="form-check-input" id="basic_checkbox_3">
									<label class="form-check-label" for="basic_checkbox_3">I have read and agree to the website terms and conditions </label>
								</div>
							</div>
							<a href="shop-checkout.html" class="btn btn-secondary w-100">PLACE ORDER</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
