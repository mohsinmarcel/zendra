@extends('website.layouts.master')
@section('main-content')
    <div class="body-content outer-top-vs" id="top-banner-and-menu">
        <div class="container">
            <div id="product-tabs-slider" class="outer-top-vs">
                <div class="more-info-tab clearfix">
                    <h3 class="new-product-title pull-left">{{ $category->name }}</h3>
                </div>
                <div class="tab-content outer-top-xs">
                    <div class="tab-pane in active" id="all">
                        <div class="row">
                            @if (!empty($category->products))
                                @foreach ($category->products as $item)
                                    {{-- dynamic item start --}}
                                    <div class="col-md-3 col-sm-6">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="{{ route('products.detail', $item->slug) }}">
                                                            {{-- <img src="{{ asset($item->productAttachments[0]->attachment) }}" alt=""> --}}
                                                            <img src="{{ asset($item->productAttachments[0]->attachment) }}" alt="" class="hover-image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="{{ route('products.detail', $item->slug) }}">{{ ucwords($item->name) }}</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <span class="price">{{ 'Rs:' . $item->price . '/-' }}</span>
                                                    </div>
                                                </div>
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                {{-- <button class="btn btn-primary icon" type="button" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button> --}}
                                                                <button class="btn btn-primary cart-btn" type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                                {{-- <li class="lnk">
                                                                    <a class="add-to-cart" href="{{ route('products.detail', $item->slug) }}" title="detail">
                                                                        <i class="fa fa-signal" aria-hidden="true"></i>
                                                                    </a>
                                                                </li> --}}
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- dynamic item end --}}
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
