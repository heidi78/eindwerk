@extends('layouts.layout')
@section('content')
<!-- Slide1 -->
{{-- <section class="slide1">
	<div class="wrap-slick1">
		@foreach($sliders as $slider)
		<div class="slick1">
			<div class="item-slick1 item1-slick1">
				<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<img src="{{$slider->photo ? asset($slider->photo->file) : 'http://placehold.it/400x400'}}" alt="perfect balance photo">
				</div>
			</div>
		@endforeach
		</div>
	</div>

	</section> --}}
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
 
  <ol class="carousel-indicators">
   @foreach($sliders as $slider )
      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
   @endforeach
  </ol>
 
  <div class="carousel-inner" role="listbox">
    @foreach($sliders as $slider )
       <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
           <img class="d-block img-fluid w-100" src="{{$slider->photo ? asset($slider->photo->file) : 'http://placehold.it/400x400'}}" alt="slider foto">
       </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





	

<!-- Banner -->
<div class="banner bgwhite p-t-40 p-b-40">
	<div class="container">
		<div class="row">
			@foreach($cat_less as $cats)
			<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
				<!-- block1 -->
				
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="{{$cats->photo ? asset($cats->photo->file) : 'http://placehold.it/400x400'}}" height="240px" alt="{{$cats->name}}">
					
					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							{{$cats->name}}
						</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>


<!-- Our product -->
<section class="bgwhite p-t-45 p-b-58">
	<div class="container">
		<div class="sec-title p-b-22">
			<h3 class="m-text5 t-center">
				Our Products
			</h3>
		</div>

		<!-- Tab01 -->
		<div class="tab01">

			<!-- Tab panes -->
			<div class="tab-content p-t-35">
				<!-- - -->
				<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
					<div class="row">
						@foreach($products as $product)
						<div class="col-sm-6 col-md-4 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2">
									<img src="{{$product->photo ? asset($product->photo->file) : 'http://placehold.it/400x400'}}" alt="{{$product->name}}" height="500" width="700">

									<div class="block2-overlay trans-0-4">
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
						@endforeach
					</div>
				</div>
			</div>
		</section>


		<!-- Shipping -->
		<section class="shipping bgwhite p-t-62 p-b-46">
			<div class="flex-w p-l-15 p-r-15">
				<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
					<h4 class="m-text12 t-center">
						Coming Soon
					</h4>

					<span class="s-text11 t-center">
						Workshop for Mindfulness
					</span>
				</div>

				<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
					<h4 class="m-text12 t-center">
						30 Days Return
					</h4>

					<span class="s-text11 t-center">
						Simply return it within 30 days for an exchange.
					</span>
				</div>

				<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
					<h4 class="m-text12 t-center">
						Store Opening
					</h4>

					<span class="s-text11 t-center">
						Shop open from Monday to Sunday
					</span>
				</div>
			</div>
		</section>



		@endsection