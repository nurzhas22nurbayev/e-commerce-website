<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">{{__('home')}}</a></li>
					<li class="item-link"><span>{{__('details')}}</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery">
							  <ul class="slides">
							    <li data-thumb="{{ asset('assets/images/products') }}/{{$product->image}}">
							    	<img src="{{ asset('assets/images/products') }}/{{$product->image}}" alt="{{$product->name}}" />
							    </li>
							    </ul>
							</div>
						</div>
						<div class="detail-info">
							<div class="product-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <a href="#" class="count-review">(05 {{__('review')}})</a>
                            </div>
                            <h2 class="product-name">{{$product->name}}</h2>
                            <div class="short-desc">
                                {{$product->short_description}}
                            </div>
                            <div class="wrap-social">
                            	<a class="link-socail" href="#"><img src="{{ asset('assets/images/social-list.png') }}" alt=""></a>
                            </div>
                            <div class="wrap-price"><span class="product-price">${{$product->regular_price}}</span></div>
                            <div class="stock-info in-stock">
                                <p class="availability">{{__('Availability')}}: <b>{{$product->stock_status}}</b></p>
                            </div>
                            <div class="quantity">
                            	<span>{{__('Quantity:')}}</span>
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >
									
									<a class="btn btn-reduce" href="#"></a>
									<a class="btn btn-increase" href="#"></a>
								</div>
							</div>
							<div class="wrap-butons">
								<a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}}, '{{$product->name}}', {{$product->regular_price}})">Add to Cart</a>
                                <div class="wrap-btn">
                                    <a href="#" class="btn btn-compare">{{__('Add Compare')}}</a>
                                    <a href="#" class="btn btn-wishlist">{{__('Add Wishlist')}}</a>
                                </div>
							</div>
						</div>
						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#description" class="tab-control-item active">{{__('description')}}</a>
								<a href="#add_infomation" class="tab-control-item">{{__('Addtional Infomation')}}</a>
							</div>
							<div class="tab-contents">
								<div class="tab-content-item active" id="description">
									{{$product->description}}
								</div>
								<div class="tab-content-item " id="add_infomation">
									<table class="shop_attributes">
										<tbody>	
											<tr>
												<th>{{__('Dimensions')}}</th><td class="product_weight">10-3/8"W x 4-1/8"H x 7-7/8"D</td>
											</tr>
											<tr>
												<th>{{__('Shipping Dimensions')}}</th><td class="product_dimensions">10.00 H x 7.50 W x 5.50 D</td>
											</tr>
											<tr>
												<th>{{__('Shipping Weight:')}}</th><td><p>1.1875 lbs</p></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="tab-content-item " id="review">
									
									<div class="wrap-review-form">
										
										<div id="comments">
											<h2 class="woocommerce-Reviews-title">01 {{__('review for')}} <span>Radiant-360 R6 Chainsaw Omnidirectional [Orage]</span></h2>
											<ol class="commentlist">
												<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
													<div id="comment-20" class="comment_container"> 
														<img alt="" src="{{ asset('assets/images/author-avata.jpg') }}" height="80" width="80">
														<div class="comment-text">
															<div class="star-rating">
																<span class="width-80-percent">{{__('Rated')}} <strong class="rating">5</strong> {{__('')}}out of 5</span>
															</div>
															<p class="meta"> 
																<strong class="woocommerce-review__author">{{__('admin')}}</strong> 
																<span class="woocommerce-review__dash">–</span>
																<time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" >Tue, Aug 15,  2017</time>
															</p>
															<div class="description">
																<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
															</div>
														</div>
													</div>
												</li>
											</ol>
										</div><!-- #comments -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget widget-our-services ">
						<div class="widget-content">
							<ul class="our-services">

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">{{__('Free Shipping')}}</b>
											<span class="subtitle">{{__('On Oder Over $59')}}</span>
											<p class="desc">{{__('We Guarantee Safety')}}	...</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-gift" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">{{__('Exclusive Offer')}}</b>
											<span class="subtitle">{{__('Get out Coupons')}}!</span>
											<p class="desc">{{__('Every month you have chance to get free coupons on our products')}}...</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->

					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">{{__('Popular Products')}}</h2>
						<div class="widget-content">
							<ul class="products">
								@foreach ($popular_products as $p_product)
                                <li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="{{route('product.details', ['slug'=>$p_product->slug])}}" title="{{$p_product->name}}">
												<figure><img src="{{ asset('assets/images/products') }}/{{$p_product->image}}" alt="{{$p_product->name}}"></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="{{route('product.details', ['slug'=>$p_product->slug])}}" title="{{$p_product->name}}" class="product-name"><span>{{$p_product->name}}</span></a>
											<div class="wrap-price"><span class="product-price">${{$p_product->regular_price}}</span></div>
										</div>
									</div>
								</li>
                                @endforeach
							</ul>
						</div>
					</div>

				</div><!--end sitebar-->

				<div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wrap-show-advance-info-box style-1 box-in-site">
						<h3 class="title-box">{{__('Related Products')}}</h3>
						<div class="wrap-products">
							<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
                                @foreach ($related_products as $r_product)
								<div class="product product-style-2 equal-elem ">
									<div class="product-thumnail">
										<a href="{{route('product.details', ['slug'=>$r_product->slug])}}" title="{{$r_product->name}}">
											<figure><img src="{{ asset('assets/images/products') }}/{{$r_product->image}}" width="214" height="214" alt="{{$r_product->name}}"></figure>
										</a>
										<div class="group-flash">
											<span class="flash-item new-label">{{__('new')}}</span>
										</div>
										<div class="wrap-btn">
											<a href="#" class="function-link">{{__('quick view')}}</a>
										</div>
									</div>
									<div class="product-info">
										<a href="{{route('product.details', ['slug'=>$r_product->slug])}}" class="product-name"><span>{{$r_product->name}}</span></a>
										<div class="wrap-price"><span class="product-price">${{$r_product->regular_price}}</span></div>
									</div>
								</div>
                                @endforeach
							</div>
						</div><!--End wrap-products-->
					</div>
				</div>
			</div><!--end row-->
		</div><!--end container-->
	</main>

					
