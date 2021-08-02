<main id="main" class="main-site left-sidebar">
<div class="container">
    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">{{__('home')}}</a></li>
            <li class="item-link"><span>{{__('Products')}}</span></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
            <div class="wrap-shop-control">
                <h1 class="shop-title">{{__('All Products')}}</h1>
                <div class="wrap-right">
                    <div class="sort-item orderby ">
                        <select name="orderby" class="use-chosen" wire:model="sorting" >
                            <option value="default" selected="selected">{{__('Default sorting')}}</option>
                            <option value="date">{{__('Sort by freshness')}}</option>
                            <option value="price">{{__('Sort by price: low to high')}}</option>
                            <option value="price-desc">{{__('Sort by price: high to low')}}</option>
                        </select>
                    </div>
                    <div class="sort-item product-per-page">
                        <select name="post-per-page" class="use-chosen" wire:model="pagesize">
                            <option value="12" selected="selected">12 {{__('per page')}}</option>
                            <option value="16">16 {{__('per page')}}</option>
                            <option value="18">18 {{__('per page')}}</option>
                            <option value="21">21 {{__('per page')}}</option>
                            <option value="24">24 {{__('per page')}}</option>
                            <option value="30">30 {{__('per page')}}</option>
                        </select>
                    </div>
                </div>
            </div><!--end wrap shop control-->
            <div class="row">
                <ul class="product-list grid-products equal-container">
                    @foreach ($products as $product)
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{route('product.details', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                                    <figure><img src="{{ asset('assets/images/products') }}/{{$product->image}}" alt="{{$product->name}}"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="{{route('product.details', ['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                <div class="wrap-price"><span class="product-price">${{$product->regular_price}}</span></div>
                                <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}}, '{{$product->name}}', {{$product->regular_price}})">{{__('Add To Cart')}}</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="wrap-pagination-info">
                {{$products->links()}}
                <!-- <ul class="page-numbers">
                    <li><span class="page-number-item current" >1</span></li>
                    <li><a class="page-number-item" href="#" >2</a></li>
                    <li><a class="page-number-item" href="#" >3</a></li>
                    <li><a class="page-number-item next-link" href="#" >Next</a></li>
                </ul>
                <p class="result-count">Showing 1-8 of 12 result</p> -->
            </div>
        </div><!--end main products area-->
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
            <div class="widget mercado-widget categories-widget">
                <h2 class="widget-title">{{__('All Categories')}}</h2>
                <div class="widget-content">
                    <ul class="list-category">
                        @foreach ($categories as $category)
                        <li class="category-item">
                            <a href="{{ route('product.category', ['category_slug' => $category->slug])}}" class="cate-link">{{$category->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div><!-- Categories widget-->
                        
        
            <div class="widget mercado-widget widget-product">
                <h2 class="widget-title">{{__('Popular Products')}}</h2>
                <div class="widget-content">
                    <ul class="products">
                        <li class="product-item">
                            <div class="product product-widget-style">
                                <div class="thumbnnail">
                                    <a href="detail.html" title="Jute MD-12 LSX">
                                        <figure><img src="{{ asset('assets/images/products/storage_3.jpg') }}" alt=""></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{__('Curvers exclusive jute md-12 version products')}}</span></a>
                                    <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                </div>
                            </div>
                        </li>

                        <li class="product-item">
                            <div class="product product-widget-style">
                                <div class="thumbnnail">
                                    <a href="detail.html" title="Jute MD-12 LSX">
                                        <figure><img src="{{ asset('assets/images/products/storage_22.jpg') }}" alt=""></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{__('Curvers exclusive jute md-12 version products')}}</span></a>
                                    <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                </div>
                            </div>
                        </li>

                        <li class="product-item">
                            <div class="product product-widget-style">
                                <div class="thumbnnail">
                                    <a href="detail.html" title="Jute MD-12 LSX">
                                        <figure><img src="{{ asset('assets/images/products/storage_18.jpg') }}" alt=""></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{__('Curvers exclusive jute md-12 version products')}}</span></a>
                                    <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                </div>
                            </div>
                        </li>

                        <li class="product-item">
                            <div class="product product-widget-style">
                                <div class="thumbnnail">
                                    <a href="detail.html" title="Jute MD-12 LSX">
                                        <figure><img src="{{ asset('assets/images/products/storage_12.jpg') }}" alt=""></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{__('Curvers exclusive jute md-12 version products')}}</span></a>
                                    <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                </div>
                            </div>
                        </li>

                        
                    </ul>
                </div>
            </div><!-- brand widget-->
        </div><!--end sitebar-->
    </div><!--end row-->
</div><!--end container-->
</main>
