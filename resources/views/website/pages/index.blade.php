@extends('website.layouts.master')
@php
 $baseUrl = App\Helpers\Helper::getBaseUrl();
@endphp
 <!--Body Content-->
 <div id="page-content">
    <!--Home slider-->
    <section>
        <div class="slideshow slideshow-wrapper pb-section sliderFull">
            <div class="home-slideshow">
                <div class="slide">
                    <div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="{{$baseUrl}}/bella_assets/images/slideshow-banners/section-slideshow-v2-img3.webp" src="{{$baseUrl}}/bella_assets/images/slideshow-banners/section-slideshow-v2-img3.webp" alt="Shop Our New Collection" title="Shop Our New Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                        <h2 class="h1 mega-title slideshow__title">Shop Our New Collection</h2>
                                        <span class="mega-subtitle slideshow__subtitle">From Hight to low, classic or modern. We have you covered</span>
                                        <span class="btn">Shop now</span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="{{$baseUrl}}/bella_assets/images/slideshow-banners/section-slideshow-v2.jpg" src="{{$baseUrl}}/bella_assets/images/slideshow-banners/section-slideshow-v2.jpg" alt="Summer Bikini Collection" title="Summer Bikini Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                    <h2 class="h1 mega-title slideshow__title">New AirPhons Collection</h2>
                                    <span class="mega-subtitle slideshow__subtitle">Save up to 50% off this weekend only</span>
                                    <span class="btn">Shop now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Home slider-->

    <!--Collection Box slider-->
    <section>
        <div class="collection-box section">
            <div class="container-fluid">
            <div class="section-header text-center">
                            <h1 class="h1">Product Category</h1>
                        </div>
                <div class="collection-grid">
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{$baseUrl}}/bella_assets/images/collection/product-8.webp" src="{{$baseUrl}}/bella_assets/images/collection/product-8.webp" alt="Fashion" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">AirPhones</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img class="blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/collection/lens.webp" src="{{$baseUrl}}/bella_assets/images/collection/lens.webp" alt="Cosmetic"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Lens</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item blur-up lazyloaded">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{$baseUrl}}/bella_assets/images/collection/product-7.webp" src="{{$baseUrl}}/bella_assets/images/collection/product-7.webp" alt="Bag" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Mobiles</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{$baseUrl}}/bella_assets/images/collection/product-8.webp" src="{{$baseUrl}}/bella_assets/images/collection/product-8.webp" alt="Accessories" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Accessories</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{$baseUrl}}/bella_assets/images/collection/lens.webp" src="{{$baseUrl}}/bella_assets/images/collection/lens.webp" alt="Shoes" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Camera</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{$baseUrl}}/bella_assets/images/collection/product-8.webp" src="{{$baseUrl}}/bella_assets/images/collection/product-8.webp" alt="Jewellry" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Charger</h3>
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!--End Collection Box slider-->

    <!--Collection Tab slider-->
    <section>
        <div class="tab-slider-product section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">New Arrivals</h2>
                            <p>Browse the huge variety of our products</p>
                        </div>
                        <div class="tabs-listing">
                            <ul class="tabs clearfix">
                                <li class="active" rel="tab1">Women</li>
                                <li rel="tab2">Men</li>
                                <li rel="tab3">Sale</li>
                            </ul>
                            <div class="tab_container">
                                <div id="tab1" class="tab_content grid-products">
                                    <div class="productSlider">
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image1.jpg" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image1-1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image1-1.jpg" alt="image" title="product">
                                                    <!-- End hover image -->
                                                    <!-- product label -->
                                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- countdown start -->
                                                <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                                <!-- countdown end -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->
                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="short-description.html">Edna Dress</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="old-price">$500.00</span>
                                                    <span class="price">$600.00</span>
                                                </div>
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                                <!-- Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant1.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant2.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant3.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant4.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant5.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant6.jpg" alt="image" /></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image2.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image2.jpg" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image2-1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image2-1.jpg" alt="image" title="product">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="short-description.html">Elastic Waist Dress</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$748.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                </div>
                                                <!-- Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant2-1.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant2-2.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant2-3.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant2-4.jpg" alt="image" /></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image3.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image3.jpg" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image3-1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image3-1.jpg" alt="image" title="product">
                                                    <!-- End hover image -->
                                                    <!-- product label -->
                                                    <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="short-description.html">3/4 Sleeve Kimono Dress</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$550.00</span>
                                                </div>
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                                <!-- Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image4.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image4.jpg" alt="image" title="product" />
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image4-1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image4-1.jpg" alt="image" title="product" />
                                                    <!-- End hover image -->
                                                    <!-- product label -->
                                                    <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="short-description.html">Cape Dress</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="old-price">$900.00</span>
                                                    <span class="price">$788.00</span>
                                                </div>
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                                <!-- Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant4-1.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant4-2.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant4-3.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant4-4.jpg" alt="image" /></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image5.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image5.jpg" alt="image" title="product" />
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image5-1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image5-1.jpg" alt="image" title="product" />
                                                    <!-- End hover image -->
                                                    <!-- product label -->
                                                    <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="short-description.html">Paper Dress</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$550.00</span>
                                                </div>
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                </div>
                                                <!-- Variant -->
                                                <ul class="swatches">
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                                    <li class="swatch medium rounded"><img src="{{$baseUrl}}/bella_assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                </div>
                                <div id="tab2" class="tab_content grid-products">
                                    <div class="productSlider">
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image6.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image6.jpg" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image6-1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image6-1.jpg" alt="image" title="product">
                                                    <!-- End hover image -->
                                                    <!-- product label -->
                                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="short-description.html">Zipper Jacket</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$788.00</span>
                                                </div>
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image7.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image7-1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image7-1.jpg" alt="image" title="product">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="short-description.html">Zipper Jacket</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$748.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                </div>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image8.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image8.jpg" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image8-1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image8-1.jpg" alt="image" title="product">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>

                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="short-description.html">Workers Shirt Jacket</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$238.00</span>
                                                </div>
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image9.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image9.jpg" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image9-1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image9-1.jpg" alt="image" title="product">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="short-description.html">Watercolor Sport Jacket in Brown/Blue</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$348.00</span>
                                                </div>
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image10.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image10.jpg" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image10-1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image10-1.jpg" alt="image" title="product">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="short-description.html">Washed Wool Blazer</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$1,078.00</span>
                                                </div>
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                </div>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                </div>
                                <div id="tab3" class="tab_content grid-products">
                                    <div class="productSlider">
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image11.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image11.jpg" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image11-1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image11-1.jpg" alt="image" title="product">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="short-description.html">Azur Bracelet in Blue Azurite</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$168.00</span>
                                                </div>
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image12.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image12.jpg" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image12-1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image12-1.jpg" alt="image" title="product">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="short-description.html">Bi-Goutte Earrings</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$58.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                </div>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image13.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image13.jpg" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image13-1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image13-1.jpg" alt="image" title="product">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>

                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="short-description.html">Ashton Necklace</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$228.00</span>
                                                </div>
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image14.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image14.jpg" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image14-1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image14-1.jpg" alt="image" title="product">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="short-description.html">Ara Ring</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$198.00</span>
                                                </div>
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.html">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image15.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image15.jpg" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-image15-1.jpg" src="{{$baseUrl}}/bella_assets/images/product-images/product-image15-1.jpg" alt="image" title="product">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->
                                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                </form>
                                                <div class="button-set">
                                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn">
                                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->

                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="short-description.html">Ara Ring</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">$198.00</span>
                                                </div>
                                                <!-- End product price -->

                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                </div>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Collection Tab slider-->


    <!--Logo Slider-->
    <div class="section logo-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="logo-bar">
                <div class="logo-bar__item">
                    <img src="{{$baseUrl}}/bella_assets/images/logo/brandlogo1.png" alt="" title="" />
                </div>
                <div class="logo-bar__item">
                    <img src="{{$baseUrl}}/bella_assets/images/logo/brandlogo2.png" alt="" title="" />
                </div>
                <div class="logo-bar__item">
                    <img src="{{$baseUrl}}/bella_assets/images/logo/brandlogo3.png" alt="" title="" />
                </div>
                <div class="logo-bar__item">
                    <img src="{{$baseUrl}}/bella_assets/images/logo/brandlogo4.png" alt="" title="" />
                </div>
                <div class="logo-bar__item">
                    <img src="{{$baseUrl}}/bella_assets/images/logo/brandlogo5.png" alt="" title="" />
                </div>
                <div class="logo-bar__item">
                    <img src="{{$baseUrl}}/bella_assets/images/logo/brandlogo6.png" alt="" title="" />
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Logo Slider-->

    <!--Featured Product-->
    <div class="product-rows section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">Featured collection</h2>
                        <p>Our most popular products based on sales</p>
                    </div>
                </div>
            </div>
            <div class="grid-products">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 item grid-view-item style2">
                        <div class="grid-view_image">
                            <!-- start product image -->
                            <a href="product-accordion.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="grid-view-item__image primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details hoverDetails text-center mobile">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-accordion.html">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <!-- product button -->
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                    </form>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- Variant -->
                            <!-- End Variant -->
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 item grid-view-item style2">
                        <div class="grid-view_image">
                            <!-- start product image -->
                            <a href="product-accordion.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="grid-view-item__image primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details hoverDetails text-center mobile">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-accordion.html">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <!-- product button -->
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                    </form>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- Variant -->
                            <!-- End Variant -->
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 item grid-view-item style2">
                        <div class="grid-view_image">
                            <!-- start product image -->
                            <a href="product-accordion.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="grid-view-item__image primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details hoverDetails text-center mobile">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-accordion.html">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <!-- product button -->
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                    </form>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- Variant -->
                            <!-- End Variant -->
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 item grid-view-item style2">
                        <div class="grid-view_image">
                            <!-- start product image -->
                            <a href="product-accordion.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="grid-view-item__image primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details hoverDetails text-center mobile">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-accordion.html">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <!-- product button -->
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                    </form>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- Variant -->
                            <!-- End Variant -->
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 item grid-view-item style2">
                        <div class="grid-view_image">
                            <!-- start product image -->
                            <a href="product-accordion.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="grid-view-item__image primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details hoverDetails text-center mobile">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-accordion.html">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <!-- product button -->
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                    </form>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- Variant -->
                            <!-- End Variant -->
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 item grid-view-item style2">
                        <div class="grid-view_image">
                            <!-- start product image -->
                            <a href="product-accordion.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="grid-view-item__image primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details hoverDetails text-center mobile">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-accordion.html">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <!-- product button -->
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                    </form>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- Variant -->
                            <!-- End Variant -->
                            <!-- End product details -->
                        </div>
                    </div>
                 <!-- row two -->
                 <div class="col-6 col-sm-6 col-md-4 col-lg-2 item grid-view-item style2">
                        <div class="grid-view_image">
                            <!-- start product image -->
                            <a href="product-accordion.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="grid-view-item__image primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details hoverDetails text-center mobile">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-accordion.html">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <!-- product button -->
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                    </form>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- Variant -->
                            <!-- End Variant -->
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 item grid-view-item style2">
                        <div class="grid-view_image">
                            <!-- start product image -->
                            <a href="product-accordion.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="grid-view-item__image primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details hoverDetails text-center mobile">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-accordion.html">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <!-- product button -->
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                    </form>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- Variant -->
                            <!-- End Variant -->
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 item grid-view-item style2">
                        <div class="grid-view_image">
                            <!-- start product image -->
                            <a href="product-accordion.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="grid-view-item__image primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details hoverDetails text-center mobile">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-accordion.html">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <!-- product button -->
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                    </form>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- Variant -->
                            <!-- End Variant -->
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 item grid-view-item style2">
                        <div class="grid-view_image">
                            <!-- start product image -->
                            <a href="product-accordion.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="grid-view-item__image primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details hoverDetails text-center mobile">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-accordion.html">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <!-- product button -->
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                    </form>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- Variant -->
                            <!-- End Variant -->
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 item grid-view-item style2">
                        <div class="grid-view_image">
                            <!-- start product image -->
                            <a href="product-accordion.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="grid-view-item__image primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details hoverDetails text-center mobile">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-accordion.html">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <!-- product button -->
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                    </form>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- Variant -->
                            <!-- End Variant -->
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 item grid-view-item style2">
                        <div class="grid-view_image">
                            <!-- start product image -->
                            <a href="product-accordion.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="grid-view-item__image primary blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload" data-src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" src="{{$baseUrl}}/bella_assets/images/product-images/product-8.webp" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details hoverDetails text-center mobile">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-accordion.html">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <!-- product button -->
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                    </form>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- Variant -->
                            <!-- End Variant -->
                            <!-- End product details -->
                        </div>
                    </div>
                  <!-- end -->
                </div>
            </div>
       </div>
    </div>
    <!--End Featured Product-->


    <!--Store Feature-->
    <div class="store-feature section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="display-table store-info">
                        <li class="display-table-cell">
                            <i class="icon anm anm-truck-l"></i>
                            <h5>Free Shipping &amp; Return</h5>
                            <span class="sub-text">Free shipping on all US orders</span>
                        </li>
                          <li class="display-table-cell">
                            <i class="icon anm anm-dollar-sign-r"></i>
                            <h5>Money Guarantee</h5>
                            <span class="sub-text">30 days money back guarantee</span>
                          </li>
                          <li class="display-table-cell">
                            <i class="icon anm anm-comments-l"></i>
                            <h5>Online Support</h5>
                            <span class="sub-text">We support online 24/7 on day</span>
                        </li>
                          <li class="display-table-cell">
                            <i class="icon anm anm-credit-card-front-r"></i>
                            <h5>Secure Payments</h5>
                            <span class="sub-text">All payment are Secured and trusted.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Store Feature-->
</div>
<!--End Body Content-->
