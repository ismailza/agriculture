@extends('layout.layout')

@section('title', setting('site.title') . " . " . $transformation->name)
@section('meta_description', $transformation->excerpt)

@section('content')

    <x-breadcrumb title="{{ $transformation->name }}">
        <li><a href="/"><i class="fas fa-home"></i> Accueil</a></li>
        <li><a href="{{ route('productions.index') }}">Productions</a></li>
        <li class="active">Details du transformation</li>
    </x-breadcrumb>

    <!-- Star Transformation Details Area
    ============================================= -->
    <div class="services-details-area default-padding">
        <div class="container">
            <div class="services-details-items">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 pl-45 pl-md-15 pl-xs-15 services-single-content order-lg-first">
                        <div class="thumb">
                            <img src="{{ asset('storage/'. $transformation->image) }}" alt="{{ $transformation->name }}">
                        </div>
                        <h2>{{ $transformation->name }}</h2>
                        <blockquote>{{ $transformation->excerpt }}</blockquote>
                        <div class="description">
                            {!! $transformation->description !!}
                        </div>
                    </div>

                    <!-- Start Sidebar -->
                    <div class="sidebar col-xl-4 col-lg-5 col-md-12 mt-md-100 mt-xs-50">
                        <aside>
                            <div class="sidebar-item recent-post">
                                <h4 class="title">Produits récents</h4>
                                <ul>
                                    @foreach($latestProducts as $product)
                                    <li>
                                        <div class="thumb">
                                            <a href="{{ route('products.show', $product->slug) }}">
                                                <img src="{{ asset('storage/'. $product->image) }}" alt="{{ $product->name }}" class="img-fluid" height="80px">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="meta-title">
                                                <span class="post-date">{{ $product->category->name }}</span>
                                            </div>
                                            <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }} </a>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="sidebar-item quick-contact-widget text-light">
                                <div class="content">
                                    <h3>Besoin d'aide?</h3>
                                    <p>Vous avez des questions ou des préoccupations? N'hésitez pas à nous contacter.</p>
                                    <h2><a href="tel:{{ setting('contact.phone') }}">{{ setting('contact.phone') }}</a></h2>
                                    <h4><a href="mailto:{{ setting('contact.email') }}">{{ setting('contact.email') }}</a></h4>
                                    <a class="btn mt-30 circle btn-theme animation btn-md" href="{{ route('contact') }}">Contactez-nous</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
