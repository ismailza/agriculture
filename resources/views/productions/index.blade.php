@extends('layout.layout')

@section('title', setting('site.title') . " . Productions")

@section('content')

    <x-breadcrumb title="Productions">
        <li><a href="/"><i class="fas fa-home"></i> Accueil</a></li>
        <li class="active">Productions</li>
    </x-breadcrumb>

    <div class="gallery-style-two-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 gallery-content">
                    <h5 class="sub-title">Nos produits</h5>
                    <h2 class="title">Découvrez nos produits</h2>
                    <div class="magnific-mix-gallery gallery-masonary">
                        <div id="gallery-masonary" class="gallery-items colums-3">
                            @foreach($products as $product)
                                <div class="gallery-item">
                                    <div class="gallery-style-one">
                                        <a href="{{ route('products.show', $product->slug) }}">
                                            <img src="{{ asset('storage/'. $product->image) }}" alt="{{ $product->name }}">
                                        </a>
                                        <div class="overlay">
                                            <p>{{ $product->category->name }}</p>
                                            <h4><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="transformation-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Transformation</h5>
                        <h2 class="title">Nos Processus de Transformation</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($transformations as $transformation)
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="transformation-item">
                        <div class="thumb">
                            <img src="{{ asset('storage/'. $transformation->image) }}" alt="{{ $transformation->name }}" height="240px">
                        </div>
                        <div class="info">
                            <h3 class="transformation-name">{{ $transformation->name }}</h3>
                            <p class="transformation-excerpt">{{ $transformation->excerpt }}</p>
                            <a href="{{ route('transformations.show', $transformation->slug) }}" class="cart-btn float-lg-end">En savoir plus &nbsp;<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
