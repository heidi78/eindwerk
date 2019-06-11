@extends('layouts.detail')
@section('content')

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="slick3">
						<div class="item-slick3">
							<div class="wrap-pic-w">
								<img src="{{$product->photo ? asset($product->photo->file) : 'http://placehold.it/400x400'}}" alt="{{$product->name}}">
							</div>
						</div>						
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					{{$product->name}}
				</h4>

				<span class="m-text17">
					€ {{$product->price}}
				</span>

				<p class="s-text8 p-t-10">
					{{$product->brand->name}}
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								 <form action="{{url('cart')}}" method="post">
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
                                    <button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="padding: 15px;">
										Add to cart
									</button>
                                 </form>
							</div>
						</div>
					</div>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							{{$product->description}}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sec-title p-b-60">
							<h3 class="m-text5 t-center">
								Related Products
							</h3>
					</div>
				</div>
					
			</div>
		</div>
		<div class="container">
			<div class="row">
				
					@foreach($products as $product)
					<div class="col-12 col-md-3">
						<div class="wrap-slick2">
								
								<div class="slick2 w-100">

									<div class="item-slick2 m-0 w-100">
										<!-- Block2 -->
										
										<div class="block2">
											
											<div class="block2-img wrap-pic-w of-hidden pos-relative block2">
												<img src="{{$product->photo ? asset($product->photo->file) : 'http://placehold.it/400x400'}}" alt="{{$product->name}}">

												<div class="block2-overlay trans-0-4">
													
													<div class="block2-btn-addcart w-size1 trans-0-4">
														<!-- Button -->
														<form action="{{url('cart')}}" method="post">
						                                    <input type="hidden" name="product_id" value="{{$product->id}}">
						                                    <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
						                                    <button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="padding: 15px;">
																Add to cart
															</button>
                                 						</form>
													</div>
												</div>
											</div>
											
											<div class="block2-txt p-t-20">
												<a href="{{url('products/details/' . $product->id)}}" class="block2-name dis-block s-text3 p-b-5">
													{{$product->name}}
												</a>

												<span class="block2-price m-text6 p-r-5">
													€ {{$product->price}}
												</span>
											</div>
										</div>
										
									</div>
								</div>
								
							</div>
							</div>
					@endforeach
				
			</div>
		</div>
				
					
			
				
			

								<!-- Slide2 -->
						
	</section>


	@endsection