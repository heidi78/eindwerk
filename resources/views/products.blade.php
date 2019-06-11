@extends('layouts.layout')
@section('content')
<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/clouds-4241180_1920.jpg);">
	<h2 class="l-text2 t-center">
		Perfect Balance
	</h2>
	<p class="m-text13 t-center">
		Alles voor de innerlijke rust
	</p>
</section>


<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					<!--  -->
					<h4 class="m-text14 p-b-7">
						Categories
					</h4>
					@foreach($categories as $cat)
					<ul class="p-b-54">
						<li class="p-t-4">
							<a href="#" class="s-text13 active1">
								{{$cat->name}}
							</a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>

			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">

				<!-- Product -->
				<div class="row">
					@foreach($products as $product)
					<div class="col-sm-12 col-md-6 col-lg-6 p-b-50">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2">

								<img src="{{$product->photo ? asset($product->photo->file) : 'http://placehold.it/400x400'}}" alt="{{$product->name}}" height="500" width="500">

								<div class="block2-overlay trans-0-4">

									<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<form action="{{url('cart')}}" method="post">
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                
	                                                <button type="submit" class="mb-2 flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
	                                                    Add to cart
	                                                </button>
	                                                
                                               
                                            </form>

									</div>
								</div>
							</div>
							<div class="d-flex justify-content-center">
<button class="mt-2 flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 w-50 d-flex justify-content-center">
	                                                	<a href="{{url('products/details/' . $product->id)}}" class="block2-name dis-block s-text3 p-b-5 text-white">
									Detail
								</a>
	                                                </button>
										</div>	
							<div class="block2-txt p-t-20 d-flex justify-content-center flex-column">
								<a href="{{url('products/details/' . $product->id)}}" class="text-center block2-name dis-block s-text3 p-b-5">
									{{$product->name}}
								</a>

								<span class=" text-center block2-price m-text6 p-r-5">
									€ {{$product->price}}
								</span>
							</div>
						</div>
					</div>
					@endforeach
					
				</div>
				
			</div>{{ $products->links() }}
		</div>
	</div>
</div>
</div>
</section>
@endsection