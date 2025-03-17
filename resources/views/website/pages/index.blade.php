@extends('website.layouts.master')
@section('main-content')
@php
    $baseUrl = App\Helpers\Helper::getBaseUrl();
    $liveBaseUrl = App\Helpers\Helper::liveBaseUrl();
@endphp
 <!--Home slider-->
 <div class="slideshow slideshow-wrapper pb-section sliderFull">
    <div class="home-slideshow">
        <div class="slide">
            <div class="blur-up lazyload bg-size">
                <img class="blur-up lazyload bg-img"
                    data-src="   {{ $baseUrl }}/bella_assets/images/slideshow-banners/zendra-banner-10.jpg"
                    src="   {{ $baseUrl }}/bella_assets/images/slideshow-banners/zendra-banner-10.jpg"
                    alt="Shop Our New Collection" title="Shop Our New Collection" />
                <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                    <div class="slideshow__text-content bottom">
                        <div class="wrap-caption center">
                            <h2 class="h1 mega-title slideshow__title">Shop Our New Collection</h2>
                            <span class="mega-subtitle slideshow__subtitle">From Hight to low, classic or
                                modern. We have you covered</span>
                            {{-- <span class="btn">Shop now</span> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="blur-up lazyload bg-size">
                <img class="blur-up lazyload bg-img"
                    data-src="   {{ $baseUrl }}/bella_assets/images/slideshow-banners/zendra-banner-12.jpg"
                    src="   {{ $baseUrl }}/bella_assets/images/slideshow-banners/zendra-banner-12.jpg"
                    alt="Summer Bikini Collection" title="Summer  Collection" />
                <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                    <div class="slideshow__text-content bottom">
                        <div class="wrap-caption center">
                            <h2 class="h1 mega-title slideshow__title">Summer  Collection</h2>
                            <span class="mega-subtitle slideshow__subtitle">Save up to 50% off this weekend
                                only</span>
                            {{-- <span class="btn">Shop now</span> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Home slider-->


@if (!empty($categories) && count($categories) > 0)
<!-- Shop By Categories Section -->
<div class="collection-box section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header text-center">
                    <h2 class="h2">Shop By Categories</h2>
                    <p>You Can Also Shop By Selecting Categories Where All Products Are Listed</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($categories as $category)
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                <div class="card border-0 shadow-sm text-center p-3">
                    <!-- Category Image -->
                    <a href="{{ route('products.by.category', $category->slug) }}">
                        <img src="{{ $baseUrl }}/{{ $category->image }}" alt="{{ $category->name }}"
                            class="img-fluid rounded">
                    </a>

                    <!-- Category Name -->
                    <h6 class="mt-3 font-weight-bold">
                        <a href="{{ route('products.by.category', $category->slug) }}" class="text-dark">
                            {{ ucWords($category->name) }}
                        </a>
                    </h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif



@if (!empty($featured) && count($featured) > 0)
<!-- Featured Product Section -->
<div class="product-rows section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header text-center">
                    <h2 class="h2">Our Featured Products</h2>
                    <p>Our Popular Products Which Meets Your Needs</p>
                </div>
            </div>
        </div>
        <div class="grid-products">
            <div class="row">
                @foreach ($featured as $feature)
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                    <div class="grid-view_image text-center p-3 border rounded">
                        <!-- Product Image -->
                        <a href="product-accordion.html">
                            <img class="grid-view-item__image blur-up lazyload w-100"
                                data-src="{{ $baseUrl }}/{{$feature->product_image}}"
                                src="{{ $baseUrl }}/{{$feature->product_image}}"
                                alt="{{ $feature->name }}" title="{{ $feature->name }}">
                        </a>

                        <!-- Product Details -->
                        <div class="product-details mt-3">
                            <!-- Product Name -->
                            <h6 class="font-weight-bold mb-1">
                                <a href="product-accordion.html" class="text-dark">{{ ucWords($feature->name) }}</a>
                            </h6>

                            <!-- Product Price -->
                            <div class="product-price mb-2">
                                @if ($feature->discounted_price > 0)
                                    <span class="old-price text-muted" style="text-decoration: line-through;">Rs: {{$feature->price}}</span>
                                    <span class="price text-danger font-weight-bold">Rs: {{$feature->discounted_price}}</span>
                                @else
                                    <span class="price text-success font-weight-bold">Rs: {{$feature->price}}</span>
                                @endif
                            </div>

                            <!-- Add to Cart Button -->
                            <button class="btn btn-primary btn-sm w-100" onclick="window.location.href='cart.html'">
                                <i class="icon anm anm-bag-l"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif

@if (!empty($sale) && count($sale) > 0)
<!--Sale Product-->
<div class="product-rows section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-header text-center">
                    <h2 class="h2">Our Sale Products</h2>
                    <p>Our Sale Products With Special Discounts</p>
                </div>
            </div>
        </div>
        <div class="grid-products">
            <div class="row">
                @foreach ($sale as $sale)
                {{-- @dump($sale->product_image) --}}
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                    <div class="grid-view_image">
                        <!-- start product image -->
                        <a href="product-accordion.html" class="grid-view-item__link">
                            <!-- image -->
                            <img class="grid-view-item__image primary blur-up lazyload"
                                data-src="{{ $baseUrl }}/{{$sale->product_image}}"
                                src="{{ $baseUrl }}/{{$sale->product_image}}"
                                alt="image" title="product">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="grid-view-item__image hover blur-up lazyload"
                                data-src="{{ $baseUrl }}/{{$sale->product_image}}"
                                src="{{ $baseUrl }}/{{$sale->product_image}}"
                                alt="image" title="product">
                            <!-- End hover image -->
                            <!-- product label -->
                            {{-- <div class="product-labels rectangular"><span
                                    class="lbl on-sale">-16%</span> <span
                                    class="lbl pr-label1">new</span></div> --}}
                            <!-- End product label -->
                        </a>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details hoverDetails text-center mobile">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-accordion.html">{{ucWords($sale->name)}}</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                @if ($sale->discounted_price > 0)
                                <span class="old-price">Rs: {{$sale->price}}</span>
                                <span class="price">Rs: {{$sale->discounted_price}}</span>
                                @else
                                <span class="price">Rs: {{$sale->price}}</span>
                                @endif

                            </div>
                            <!-- End product price -->

                            <!-- product button -->
                            <div class="button-set">
                                <!-- Start product button -->
                                <form class="variants add" action="#"
                                    onclick="window.location.href='cart.html'"method="post">
                                    <button class="btn cartIcon btn-addto-cart" type="button"
                                        tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                </form>
                                {{-- <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                        <i class="icon anm anm-heart-l"></i>
                                    </a>
                                </div> --}}
                            </div>
                            <!-- end product button -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
</div>
<!--End Featured Product-->
@endif

@if (!empty($mobiles) && count($mobiles) > 0)
<!-- Mobile Phones Section -->
<div class="product-rows section">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="col-12">
                <div class="section-header text-center">
                    <h2 class="h2">Mobile Phones</h2>
                    <p>We Also Deal in Mobile Phones in the Best Condition</p>
                </div>
            </div>
        </div>

        <!-- Product Listing -->
        <div class="row">
            @foreach ($mobiles as $mobile)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card border-0 shadow-sm text-center p-3">
                    <!-- Product Image -->
                    <a href="{{ route('product.details', $mobile->slug) }}">
                        <img src="{{ $baseUrl }}/{{ $mobile->encoded_images[0] }}"
                             alt="{{ $mobile->name }}"
                             class="img-fluid rounded">
                    </a>

                    <!-- Product Name -->
                    <h6 class="mt-3 font-weight-bold">
                        <a href="{{ route('product.details', $mobile->slug) }}" class="text-dark">
                            {{ ucWords($mobile->name) }}
                        </a>
                    </h6>

                    <!-- Product Price -->
                    <div class="product-price">
                        @if ($mobile->discounted_price > 0)
                            <span class="old-price text-muted"><s>Rs: {{ $mobile->price }}</s></span>
                            <span class="price text-danger font-weight-bold">Rs: {{ $mobile->discounted_price }}</span>
                        @else
                            <span class="price font-weight-bold">Rs: {{ $mobile->price }}</span>
                        @endif
                    </div>

                    <!-- Add to Cart Button -->
                    <div class="mt-2">
                        <button class="btn btn-sm btn-primary">
                            <i class="icon anm anm-bag-l"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif


<!--Latest Blog-->
<div class="latest-blog section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-header text-center">
                    <h2 class="h2">Our Reviews</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="wrap-blog">
                    <a href="blog-left-sidebar.html" class="article__grid-image">
                        <img src="   {{ $baseUrl }}/bella_assets/images/male.jpg"
                            alt="It's all about how you wear" title="It's all about how you wear"
                            class="blur-up lazyloaded" />
                    </a>
                    <div class="article__grid-meta article__grid-meta--has-image">
                        <div class="wrap-blog-inner">
                            <h2 class="h3 article__title">
                                <a href="blog-left-sidebar.html">High-Quality Accessories at Great Prices!</a>
                            </h2>
                            <span class="article__date">{{date('d M , Y')}}</span>
                            <div class="rte article__grid-excerpt">
                                I recently purchased a phone case and screen protector from this website, and I'm thoroughly impressed. The quality of the products exceeded my expectations, and the prices were very reasonable. The checkout process was smooth, and the delivery was prompt. Highly recommend this site for anyone looking for reliable mobile accessories!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="wrap-blog">
                    <a href="blog-left-sidebar.html" class="article__grid-image">
                        <img src="   {{ $baseUrl }}/bella_assets/images/female.jpg"
                            alt="27 Days of Spring Fashion Recap"
                            title="27 Days of Spring Fashion Recap" class="blur-up lazyloaded" />
                    </a>
                    <div class="article__grid-meta article__grid-meta--has-image">
                        <div class="wrap-blog-inner">
                            <h2 class="h3 article__title">
                                <a href="blog-right-sidebar.html">Stylish and Durable Accessories!</a>
                            </h2>
                            <span class="article__date">{{date('d M , Y')}}</span>
                            <div class="rte article__grid-excerpt">
                                I ordered a phone cover and a pop socket, and I absolutely love them! The designs are super chic, and the durability is fantastic. I’ve already received compliments on my phone case. Shopping was easy, and the items arrived on time. I’ll definitely shop here again for my accessories!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Latest Blog-->

@endsection
