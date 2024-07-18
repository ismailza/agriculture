@extends('layout.layout')

@section('title', setting('site.title') . " . " . $product->name)
@section('meta_description', $product->excerpt)

@section('content')

    <x-breadcrumb title="{{ $product->name }}">
        <li><a href="/"><i class="fas fa-home"></i> Accueil</a></li>
        <li><a href="{{ route('productions.index') }}">Productions</a></li>
        <li class="active">Details du produit</li>
    </x-breadcrumb>

    <div class="validtheme-shop-single-area default-padding">
        <div class="container">
            <div class="product-details">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-thumb">
                            <img src="{{ asset('storage/'. $product->image) }}" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-product-contents">
                            <div class="summary-top-box">
                                <div class="product-tags">
                                    <p>{{ $product->category->name }}</p>
                                </div>
                                <div class="review-count">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <h2 class="product-title">{{ $product->name }}</h2>
                            <div class="price"></div>
                            <div class="product-stock validthemes-in-stock"></div>
                            <p>{{ $product->excerpt }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Bottom Info  -->
            <div class="single-product-bottom-info">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Tab Nav -->
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="description-tab-control" data-bs-toggle="tab" data-bs-target="#description-tab" type="button" role="tab" aria-controls="description-tab" aria-selected="true">
                                Description
                            </button>
                        </div>
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info" id="myTabContent">
                            <!-- Tab Single -->
                            <div class="tab-pane fade show active" id="description-tab" role="tabpanel" aria-labelledby="description-tab-control">
                                {!! $product->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Bottom Info  -->

            <!-- Related Product  -->
            @if($relatedProducts->count() > 0)
            <div class="related-products carousel-shadow">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Produits similaires</h3>
                        <div class="vt-products text-center related-product-carousel swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                @foreach($relatedProducts as $product)
                                <div class="swiper-slide">
                                    <div class="product">
                                        <div class="product-contents">
                                            <div class="product-image">
                                                <a href="{{ route('products.show', $product->slug) }}">
                                                    <img src="{{ asset('storage/'. $product->image) }}" alt="{{ $product->name }}">
                                                </a>
                                                <div class="shop-action">
                                                    <ul>
                                                        <li class="quick-view">
                                                            <a href="{{ route('products.show', $product->slug) }}"><span>Quick view</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-caption">
                                                <div class="product-tags">
                                                    <a>{{ $product->category->name }}</a>
                                                </div>
                                                <h4 class="product-title">
                                                    <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                                                </h4>
                                                <a href="{{ route('products.show', $product->slug) }}" class="cart-btn">Voir plus &nbsp;<i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

@endsection
