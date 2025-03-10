@extends('website.layouts.master')

@section('main-content')
    <div class="container">
        <div class="row single-product">
            <!-- /.sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-12 rht-col">
                <div class="detail-block">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
                            <div class="product-item-holder size-big single-product-gallery small-gallery">

                                <div id="owl-single-product" class="owl-carousel owl-theme"
                                    style="opacity: 1; display: block;">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 7632px; left: 0px; display: block;">
                                            @foreach ($product->productAttachments as $index => $item)
                                            <div class="owl-item" style="width: 424px;">
                                                <div class="single-product-gallery-item" id="slide1-{{$item->id}}">
                                                    <a data-lightbox="image-1" data-title="Gallery"
                                                        href="{{asset($item->attachment)}}">
                                                        <img class="img-responsive" alt=""
                                                            src="{{asset($item->attachment)}}">
                                                    </a>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div><!-- /.single-product-gallery-item -->

                                    <div class="owl-controls clickable">
                                        <div class="owl-pagination">
                                            <div class="owl-page active"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                        </div>
                                    </div>
                                </div><!-- /.single-product-slider -->


                                <div class="single-product-gallery-thumbs gallery-thumbs">

                                    <div id="owl-single-product-thumbnails" class="owl-carousel owl-theme"
                                        style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer">
                                            <div class="owl-wrapper" style="width: 1908px; left: 0px; display: block;">
                                                @foreach ($product->productAttachments as $index => $item)
                                                <div class="owl-item" style="width: 106px;">
                                                    <div class="item">
                                                        <a class="horizontal-thumb active"
                                                            data-target="#owl-single-product" data-slide="1"
                                                            href="#slide1-{{$item->id}}">
                                                            <img class="img-responsive" alt=""
                                                                src="{{asset($item->attachment)}}">
                                                        </a>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>









                                        <div class="owl-controls clickable">
                                            <div class="owl-pagination">
                                                <div class="owl-page active"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                            </div>
                                        </div>
                                    </div><!-- /#owl-single-product-thumbnails -->



                                </div><!-- /.gallery-thumbs -->

                            </div><!-- /.single-product-gallery -->
                        </div><!-- /.gallery-holder -->
                        <div class="col-sm-12 col-md-8 col-lg-8 product-info-block">
                            <div class="product-info">
                                <h1 class="name">{{$product->name}}</h1>

                                {{-- <div class="rating-reviews m-t-20">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="pull-left">
                                                <div class="rating rateit-small rateit"><button id="rateit-reset-5"
                                                        data-role="none" class="rateit-reset" aria-label="reset rating"
                                                        aria-controls="rateit-range-5" style="display: none;"></button>
                                                    <div id="rateit-range-5" class="rateit-range" tabindex="0"
                                                        role="slider" aria-label="rating" aria-owns="rateit-reset-5"
                                                        aria-valuemin="0" aria-valuemax="5" aria-valuenow="4"
                                                        aria-readonly="true" style="width: 70px; height: 14px;">
                                                        <div class="rateit-selected" style="height: 14px; width: 56px;">
                                                        </div>
                                                        <div class="rateit-hover" style="height:14px"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pull-left">
                                                <div class="reviews">
                                                    <a href="#" class="lnk">(13 Reviews)</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.rating-reviews --> --}}

                                <div class="stock-container info-container m-t-10">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="pull-left">
                                                <div class="stock-box">
                                                    <span class="label">Availability :</span>
                                                </div>
                                            </div>
                                            <div class="pull-left">
                                                <div class="stock-box">
                                                    <span class="value">In Stock</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.stock-container -->

                                <div class="description-container m-t-20">
                                    <p>{{$product->description}}</p>
                                </div><!-- /.description-container -->

                                <div class="price-container info-container m-t-30">
                                    <div class="row">


                                        <div class="col-sm-6 col-xs-6">
                                            <div class="price-box">
                                                <span class="price">{{'Rs:'.$product->price.'/-'}}</span>
                                                {{-- <span class="price-strike">$900.00</span> --}}
                                            </div>
                                        </div>

                                        {{-- <div class="col-sm-6 col-xs-6">
                                            <div class="favorite-button m-t-5">
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                                    title="" href="#" data-original-title="Wishlist">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                                    title="" href="#" data-original-title="Add to Compare">
                                                    <i class="fa fa-signal"></i>
                                                </a>
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                                    title="" href="#" data-original-title="E-mail">
                                                    <i class="fa fa-envelope"></i>
                                                </a>
                                            </div>
                                        </div> --}}

                                    </div><!-- /.row -->
                                </div><!-- /.price-container -->

                                <div class="quantity-container info-container">
                                    <div class="row">

                                        <div class="qty">
                                            <span class="label">Qty :</span>
                                        </div>

                                        <div class="qty-count">
                                            <div class="cart-quantity">
                                                <div class="quant-input">
                                                    <div class="arrows">
                                                        <div class="arrow plus gradient"><span class="ir"><i
                                                                    class="icon fa fa-sort-asc"></i></span></div>
                                                        <div class="arrow minus gradient"><span class="ir"><i
                                                                    class="icon fa fa-sort-desc"></i></span></div>
                                                    </div>
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="add-btn">
                                            <a href="#" class="btn btn-primary"><i
                                                    class="fa fa-shopping-cart inner-right-vs"></i> ADD TO
                                                CART</a>
                                        </div>


                                    </div><!-- /.row -->
                                </div><!-- /.quantity-container -->






                            </div><!-- /.product-info -->
                        </div><!-- /.col-sm-7 -->
                    </div><!-- /.row -->
                </div>

                <!-- /.product-tabs -->

                <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                <!-- /.section -->
                <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

            </div><!-- /.col -->
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
