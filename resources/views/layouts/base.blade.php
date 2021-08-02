<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    @livewireStyles
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									curver
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								@php $locale = session()->get('locale'); @endphp
								<li class="menu-item lang-menu menu-item-has-children parent">
								@switch($locale)
    								@case('en')
    								<img width="20" src="{{asset('assets/images/lang-en.png')}}">
    								English
    								@break
    								@case('kz')
    								<img width="20" src="{{asset('assets/images/lang-kaz.png')}}">
    								Kazakh
    								@break
    								@default
    								<img width="20" src="{{asset('assets/images/lang-en.png')}}">
    								English
    								@endswitch
    								<span class="caret"></span>
									<!--<a title="English" href="#"><span class="img label-before"><img src="assets/images/lang-en.png" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>-->
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="kazakh" href="kz"><span class="img label-before"><img src="assets/images/lang-kaz.png" width="20px" alt="lang-kaz"></span>Kazakh</a></li>
										<li class="menu-item" ><a title="english" href="en"><span class="img label-before"><img src="assets/images/lang-en.png" width="20px" alt="lang-kaz"></span>English</a></li>
									</ul>
								</li>
					
								@if(Route::has('login'))
									@auth 
										@if(Auth::user()->utype === 'ADM')
											<li class="menu-item menu-item-has-children parent">
												<a title="My Account" href="#">{{__('My Account')}} ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a title="Dashboard" href="{{ route('admin.dashboard') }}">{{__('Dashboard')}}</a>
													</li>
													<li class="menu-item" >
														<a title="Products" href="{{ route('admin.products') }}">{{__('All Products')}}</a>
													</li>
													<li class="menu-item">
														<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('Logout')}}</a>
													</li>
													<form id="logout-form" method="POST" action="{{ route('logout') }}">
														@csrf		
													</form>
												</ul>
											</li>
										@else
											<li class="menu-item menu-item-has-children parent" >
												<a title="My Account" href="#">{{__('My Account')}} ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a title="Dashboard" href="{{ route('user.dashboard') }}">{{__('Dashboard')}}</a>
													</li>
													<li class="menu-item">
														<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('Logout')}}</a>
													</li>
													<form id="logout-form" method="POST" action="{{ route('logout') }}">
														@csrf
													</form>
												</ul>
											</li>
										@endif
									@else
										<li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">{{__('Login')}}</a></li>
										<li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">{{__('Register')}} </a></li>
									@endif
								@endif
							</ul>
						</div>
					</div>
				</div>

				
				<div class="nav-section header-sticky">
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu"  >		
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">{{__('Shop')}}</a>
								</li>
								<li class="menu-item">
									<a href="about-us.html" class="link-term mercado-item-title">{{__('About Us')}}</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">{{__('Cart')}}</a>
								</li>
								<li class="menu-item">
									<a href="contact-us.html" class="link-term mercado-item-title">{{__('Contact Us')}}</a>
								</li>
								<li class="menu-item">
									<div class="wrap-icon right-section">
										<div class="wrap-icon-section minicart">
											<a href="/cart" class="link-direction">
												<i class="fa fa-cart-plus fa-2x" style="color:crimson !important;"></i>
												<div class="left-info">
													@if(Cart::count() == 1)
													<span class="index" style="color:white;">{{Cart::count()}} item</span>
													@elseif(Cart::count() > 1)
													<span class="index" style="color:white;">{{Cart::count()}} items</span>
													@endif
													<span class="title" style="color:white !important;">{{__('CART')}}</span>
												</div>
											</a>
										</div>
										<div class="wrap-icon-section show-up-after-1024">
											<a href="#" class="mobile-navigation">
												<span></span>
												<span></span>
												<span></span>
											</a>
										</div>
									</div>
								</li>																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main class="py-4">
		@yield('content')
	</main>


	{{$slot}}

	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">{{__('Free Shipping')}}</h4>
								<p class="fc-desc">{{__('Free On Oder Over $99')}}</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">{{__('Guarantee')}}</h4>
								<p class="fc-desc">{{__('30 Days Money Back')}}</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">{{__('Safe Payment')}}</h4>
								<p class="fc-desc">{{__('Safe your online payment')}}</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">{{__('Online Suport')}}</h4>
								<p class="fc-desc">{{__('We Have Support 24/7')}}</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">{{__('Contact Details')}}</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">{{__('45 Grand Central Terminal New York,NY 1017 United State USA')}}</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">(+123) 456 789 - (+123) 666 888</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">Contact@yourcompany.com</p>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header">{{__('Hot Line')}}</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">{{__('Call Us toll Free')}}</span>
										<b class="phone-number">(+123) 456 789 - (+123) 666 888</b>
									</div>
								</div>
							</div>

							<div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">{{__('Sign up for newsletter')}}</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										@if(count($errors) > 0)
										<div class="alert alert-danger">
											<button type="button" class="close" data-dismiss="alert">x</button>
											<ul>
												@foreach($errors->all() as $error)
													<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
										@endif
										@if($message = Session::get('success'))
											<div class="alert alert-success alert-block">
												<button type="button" class="close" data-dismiss="alert">x</button>
												<strong>{{ $message }}</strong>
											</div>
										@endif
										<form method="POST" action="{{ url('sendemail/send') }}" class="frm-newletter" id="frm-newletter">
											{{csrf_field()}}
											<div class="form-group">
												<input type="text" class="form-control input-email" name="email" value="" placeholder="Enter your email address">
											</div>
											<div class="form-group">
												<input type="submit" name="send" value="Subscribe" class="btn btn-info">
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">{{__('My Account')}}</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">{{__('My Account')}}</a></li>
												<li class="menu-item"><a href="#" class="link-term">{{__('Brands')}}</a></li>
												<li class="menu-item"><a href="#" class="link-term">{{__('Gift Certificates')}}</a></li>
												<li class="menu-item"><a href="#" class="link-term">{{__('Affiliates')}}</a></li>
												<li class="menu-item"><a href="#" class="link-term">{{__('Wish list')}}</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">{{__('Infomation')}}</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">{{__('Contact Us')}}</a></li>
												<li class="menu-item"><a href="#" class="link-term">{{__('Returns')}}</a></li>
												<li class="menu-item"><a href="#" class="link-term">{{__('Site Map')}}</a></li>
												<li class="menu-item"><a href="#" class="link-term">{{__('Specials')}}</a></li>
												<li class="menu-item"><a href="#" class="link-term">{{__('Order History')}}</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">{{__('We Using Safe Payments:')}}</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="assets/images/payment.png" style="max-width: 260px;">
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">{{__('Social network')}}</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">{{__('Dowload App')}}</h3>
								<div class="item-content">
									<div class="wrap-list-item apps-list">
										<ul>
											<li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="assets/images/brands/apple-store.png" alt="apple store" width="128" height="36"></figure></a></li>
											<li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="assets/images/brands/google-play-store.png" alt="google play store" width="128" height="36"></figure></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2020 Surfside Media. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.html" class="link-term">{{__('About us')}}</a></li>								
								<li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
								<li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>
								<li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a></li>								
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	
	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	<!-- <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script> -->
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
    @livewireScripts
</body>
</html>