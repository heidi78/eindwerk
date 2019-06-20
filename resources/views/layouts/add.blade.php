<!DOCTYPE html>
<html lang="en">
<head>
	<title>Eindwerk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('/images/icons/favicon.png') }}"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/fonts/themify/themify-icons.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/fonts/elegant-font/html-css/style.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/animate/animate.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/css-hamburgers/hamburgers.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/animsition/css/animsition.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/select2/select2.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/daterangepicker/daterangepicker.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/slick/slick.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/lightbox2/css/lightbox.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/main.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/css/mijncss.css')}}" />
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header2">
		<!-- Header desktop -->
		<div class="container-menu-header-v2 p-t-26">
			<div class="topbar2">
				<div class="topbar-social">
					<a href="https://www.facebook.com/Inspirerendleven.nl/" target="_blank" class="topbar-social-item fa fa-facebook"></a>
					<a href="https://www.instagram.com/natural.self/?utm_source=ig_embed" target="_blank" class="topbar-social-item fa fa-instagram"></a>
					<a href="https://nl.pinterest.com/search/pins/?q=levenscitaten&rs=typed&term_meta[]=levenscitaten%7Ctyped" target="_blank" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="https://www.youtube.com/watch?v=lFcSrYw-ARY" target="_blank" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<!-- Logo2 -->
				<a href="{{url('/')}}">
					<img src="images/harmony.png" style="height:180px;" alt="perfect balance logo">
				</a>
			</div>

			<div class="wrap_header">

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="{{url('/')}}">Home</a>
								
							</li>

							<li>
								<a href="{{url('products')}}">Shop</a>
							</li>

							<li>
								<a href="{{url('cart')}}">Cart</a>
							</li>

							<!-- Authentication Links -->
							@guest
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
							@endif
							@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
								<a href="{{ url('/admin') }}" class="p-l-20">Admin Dashboard</a>
							</div>
						</li>
						@endguest
					</ul>
				</nav>
			</div>		
		</div>
	</div>

	<!-- Header Mobile -->
	<div class="wrap_header_mobile">
		<!-- Logo moblie -->
		<a href="{{url('/')}}" class="logo-mobile">
			<img src="images/harmony.png" style="height: 200px;" alt="perfect balance logo">
		</a>

		<!-- Button show menu -->
		

	<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
	<!-- Menu Mobile -->
	<div class="wrap-side-menu" >
		<nav class="side-menu">
			<ul class="main-menu">
				<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
					<div class="topbar-child2-mobile">
						<span class="topbar-email">
							pascale.trenson@test.com
						</span>
					</div>
				</li>

				<li class="item-topbar-mobile p-l-10">
					<div class="topbar-social-mobile">
						<a href="https://www.facebook.com/Inspirerendleven.nl/" target="_blank" class="topbar-social-item fa fa-facebook"></a>
						<a href="https://www.instagram.com/natural.self/?utm_source=ig_embed" target="_blank" class="topbar-social-item fa fa-instagram"></a>
						<a href="https://nl.pinterest.com/search/pins/?q=levenscitaten&rs=typed&term_meta[]=levenscitaten%7Ctyped" target="_blank" class="topbar-social-item fa fa-pinterest-p"></a>
						<a href="https://www.youtube.com/watch?v=lFcSrYw-ARY" target="_blank" class="topbar-social-item fa fa-youtube-play"></a>
					</div>
				</li>

				<li class="item-menu-mobile">
					<a href="{{url('/')}}">Home</a>
				</li>

				<li class="item-menu-mobile">
					<a href="{{url('products')}}">Shop</a>
				</li>

				<li class="item-menu-mobile">
					<a href="{{url('cart')}}">Cart</a>
				</li>
				@guest
				<li class="item-menu-mobile">
					<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
				</li>
				@if (Route::has('register'))
				<li class="item-menu-mobile">
					<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
				</li>
				@endif
				@else
				<li class="item-menu-mobile dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<div class="dropdown-menu dropdown-menu-right admin" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
					<a href="{{ url('/admin') }}" class="admin-link"></i>Admin Dashboard</a>
				</div>
			</li>
			@endguest
		</ul>
	</nav>
</div>
</header>

@yield('content')

<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
	<div class="flex-w p-b-90 p-l-150">
		<div class="container detail-container m-auto">
			<div class="row">
					<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
						<h4 class="s-text12 p-b-30">
							GET IN TOUCH
						</h4>

						<div>
							<p class="s-text7 w-size27">
								Je kunt me altijd een berichtje sturen naar pascale.trenson@test.com.
							</p>

							<div class="flex-m p-t-30">
								<a href="https://www.facebook.com/Inspirerendleven.nl/" target="_blank" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
								<a href="https://www.instagram.com/natural.self/?utm_source=ig_embed" target="_blank" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
								<a href="https://nl.pinterest.com/search/pins/?q=levenscitaten&rs=typed&term_meta[]=levenscitaten%7Ctyped" target="_blank" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
								<a href="https://www.youtube.com/watch?v=lFcSrYw-ARY" target="_blank" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
							</div>
						</div>
					</div>
			</div>

			<div class="t-center p-l-15 p-r-15">
				<a href="#">
					<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
				</a>

				<a href="#">
					<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
				</a>

				<a href="#">
					<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
				</a>

				<a href="#">
					<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
				</a>

				<a href="#">
					<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
				</a>

				<div class="t-center s-text8 p-t-20">
					<i class="fa fa-heart-o"></i> By Heidi Vanhoutte
				</div>
			</div>
		</div>
	</div>
</footer>



<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>

<!-- Modal Video 01-->
<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document" data-dismiss="modal">
		<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

		<div class="wrap-video-mo-01">
			<div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
			<div class="video-mo-01">
				<iframe src="https://www.youtube.com/embed/Nt8ZrWY2Cmk?rel=0&amp;showinfo=0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>

<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('/vendor/bootstrap/js/popper.js') }}"></script>
<script type="text/javascript" src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('/vendor/select2/select2.min.js') }}"></script>
<script type="text/javascript">
	$(".selection-1").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelect1')
	});
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('/vendor/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('/vendor/lightbox2/js/lightbox.min.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('/vendor/sweetalert/sweetalert.min.js') }}"></script>
<script type="text/javascript">
	$('.block2-btn-addcart').each(function(){
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function(){
			swal(nameProduct, "is added to cart !", "success");
		});
	});

	$('.block2-btn-addwishlist').each(function(){
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function(){
			swal(nameProduct, "is added to wishlist !", "success");
		});
	});
</script>

<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('/vendor/parallax100/parallax100.js') }}"></script>
<script type="text/javascript">
	$('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="{{asset('/js/main.js') }}"></script>

</body>
</html>
