@extends('layouts.layout')
@section('content')
@if (session('succes_message'))
<div class="alert alert-success">
	{{session('success_message')}}
	@endif
	@if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif
</div>
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/stenen%20aan%20zee.jpg)";>
	<h2 class="l-text2 t-center dark">
		Cart
	</h2>
</section>

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<!-- Cart item -->
		<div class="container-table-cart pos-relative">
			<div class="wrap-table-shopping-cart bgwhite">
				@if(count($cart))
				<table class="table-shopping-cart">
					<tr class="table-head">
						<th class="column-1"></th>
						<th class="column-2">Product</th>
						<th class="column-3">Price</th>
						<th class="column-4 p-l-70">Quantity</th>
						<th class="column-5">Total</th>
					</tr>

					@foreach($cart as $item)
					<tr class="table-row">
						<td class="column-1">
							<div class="cart-img-product b-rad-4 o-f-hidden">
								<img src="/image/product/{{$item->photo}}" alt="{{$item->name}}">
							</div>
						</td>
						<td class="column-2">{{$item->name}}</td>
						<td class="column-3">€ {{$item->price}}</td>
						<td class="column-4">
							<div class="flex-w bo5 of-hidden w-size17">

								<a class="btn-num-product-down color1 flex-c-m size7 bg8 eff2" href="{{url("cart?product_id=$item->id&increment=1")}}">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</a>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product2" value="{{ $item->qty }}">

								<a class="btn-num-product-up color1 flex-c-m size7 bg8 eff2" href="{{url("cart?product_id=$item->id&decrease=1")}}">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</a>

							</div>
						</td>
						<td class="column-5">€ {{$item->subtotal}}</td>
						<td class="column-5"><a class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 d-flex p20" href="{{url("cart?product_id=$item->id&delete=1")}}">
							Clear
						</a></td>
					</tr>
					@endforeach
					@else
					<p class="alert-info">No items in shopping cart</p>
					@endif
				</table>
			</div>
		</div>

		<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">

			<h5 class="m-text20 p-b-24">
				Cart Totals
			</h5>

			<!--  -->
			<div class="flex-w flex-sb-m p-t-26 p-b-30">
				<span class="m-text22 w-size19 w-full-sm">
					Total:
				</span>
				<input id="amount" class="m-text21 w-size20 w-full-sm" name="amount" type="tel" min="1" placeholder="Amount" value="{{Cart::subTotal()}}">
			</div>
			<div class="total_area">
				<div class="col-md-6 p-l-0">
					<div class="size15 trans-0-4">
						<a class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" href="{{url('clear-cart')}}"><span>Clear-cart</span></a>
					</div>
				</div>
				<form method="post" id="payment-form" action="{{url('checkout')}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<section>
						<div class="bt-drop-in-wrapper">
							<div id="bt-dropin"></div>
						</div>
					</section>
					<div class="size15 trans-0-4">
						<!-- Button -->
						<input id="nonce" name="payment_method_nonce" type="hidden" />
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="submit"><span>Betalen</span></button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</section>

<script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>
<script>
	var form = document.querySelector('#payment-form');
	var client_token = "{{$token}}";
	braintree.dropin.create({
		authorization: client_token,
		selector: '#bt-dropin',
		paypal: {
			flow: 'vault'
		}
	}, function (createErr, instance) {
		if (createErr) {
			console.log('Create Error', createErr);
			return;
		}
		form.addEventListener('submit', function (event) {
			event.preventDefault();
			instance.requestPaymentMethod(function (err, payload) {
				if (err) {
					console.log('Request Payment Method Error', err);
					return;
				}
                // Add the nonce to the form and submit
                document.querySelector('#nonce').value = payload.nonce;
                form.submit();
            });
		});
	});
</script>
@endsection