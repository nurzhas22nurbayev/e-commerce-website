@section('content')
<main id="main">
		<div class="container">

			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
					<div class="item-slide">
						<img src="{{ asset('assets/images/slide-4.jpg') }}" alt="" class="img-slide">
						<div class="slide-info slide-3">
							<h2 class="f-title">{{__('Great Range of Storage & Laundry products')}}</h2>
							<span class="f-subtitle">{{__('Exclusively for you.')}}</span>
							<p class="sale-info">{{__('Stating at:')}} <b class="price">$125.00</b></p>
							<a href="/shop" class="btn-link">{{__("Shop Now")}}</a>
						</div>
					</div>
					<div class="item-slide">
						<img src="{{ asset('assets/images/slide-3.jpg') }}" alt="" class="img-slide">
						<div class="slide-info slide-2">
							<h2 class="f-title" style="color:black !important;">{{__('Sale 20% Off')}}</h2>
							<span class="f-subtitle">{{__('On online payments')}}</span>
							<p class="discount-code">{{__('Use Code: #FA6868')}}</p>
							<h4 class="s-title">{{__('Get Free')}}</h4>
							<a href="/shop" class="btn-link">{{__('Shop Now')}}</a>
						</div>
					</div>
					<div class="item-slide">
						<img src="{{ asset('assets/images/slide-5.jpg') }}" alt="" class="img-slide">
						<div class="slide-info slide-2">
							<h2 class="f-title" style="color:black !important;">{{__('Card payments are available')}}</h2><br>
							<span class="f-subtitle">{{__('online payments')}}</span>
							<p class="discount-code">{{__('Get Free coupons')}}</p>
							<a href="/shop" class="btn-link">{{__('Shop Now')}}</a>
						</div>
					</div>
				</div>
			</div>

			<!--BANNER-->
			<div class="wrap-banner style-twin-default">
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="{{ asset('assets/images/ban-2.jpg') }}" alt="" width="580" height="190"></figure>
					</a>
				</div>
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="{{ asset('assets/images/ban-2.jpg') }}" alt="" width="580" height="190"></figure>
					</a>
				</div>
			</div>

			<!--On Sale-->
			<div class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box">{{__('Quick view')}}</h3>
				<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Jute Terazzo Infinity pro">
								<figure><img src="{{ asset('assets/images/products/storage_22.jpg') }}" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">{{__('sale')}}</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">{{__('quick view')}}</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Jute Terazzo Infinity pro</span></a>
							<div class="wrap-price"><span class="product-price">$250.00</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Jute Terazzo Infinity pro">
								<figure><img src="{{ asset('assets/images/products/storage_12.jpg') }}" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">{{__('sale')}}</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">{{__('quick view')}}</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Jute Terazzo Infinity pro</span></a>
							<div class="wrap-price"><span class="product-price">$250.00</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Jute Terazzo Infinity pro">
								<figure><img src="{{ asset('assets/images/products/storage_5.jpg') }}" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">{{__('sale')}}</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">{{__('quick view')}}</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Jute Terazzo Infinity pro</span></a>
							<div class="wrap-price"><span class="product-price">$250.00</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Jute Terazzo Infinity pro">
								<figure><img src="{{ asset('assets/images/products/storage_15.jpg') }}" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">{{__('sale')}}</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">{{__('quick view')}}</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Jute Terazzo Infinity pro</span></a>
							<div class="wrap-price"><span class="product-price">$250.00</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Jute Terazzo Infinity pro">
								<figure><img src="{{ asset('assets/images/products/storage_2.jpg') }}" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">{{__('sale')}}</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">{{__('quick view')}}</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Jute Terazzo Infinity pro</span></a>
							<div class="wrap-price"><span class="product-price">$250.00</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Jute Terazzo Infinity pro">
								<figure><img src="{{ asset('assets/images/products/storage_19.jpg') }}" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">{{__('sale')}}</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">{{__('quick view')}}</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>{{__('')}}Jute Terazzo Infinity pro</span></a>
							<div class="wrap-price"><span class="product-price">$250.00</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Jute Terazzo Infinity pro">
								<figure><img src="{{ asset('assets/images/products/storage_20.jpg') }}" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">{{__('sale')}}</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">{{__('quick view')}}</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Jute Terazzo Infinity pro</span></a>
							<div class="wrap-price"><span class="product-price">$250.00</span></div>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Jute Terazzo Infinity pro">
								<figure><img src="{{ asset('assets/images/products/storage_10.jpg') }}" width="800" height="800" alt=""></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">{{__('sale')}}</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">{{__('quick view')}}</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Jute Terazzo Infinity pro</span></a>
							<div class="wrap-price"><span class="product-price">$250.00</span></div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</main>
@endsection