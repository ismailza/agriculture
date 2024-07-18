@extends('layout.layout')

@section('title', setting('site.title'))

@section('content')

    <!-- Start Banner Area
    ============================================= -->
    <div class="banner-area navigation-circle text-light banner-style-one zoom-effect overflow-hidden">
        <!-- Slider main container -->
        <div class="banner-fade">
            <div class="swiper-wrapper">
                @foreach($slides as $slide)
                <div class="swiper-slide banner-style-one p-4">
                    <div class="banner-thumb bg-cover shadow dark" style="background: url({{ asset('storage/'. str_replace('\\', '/', $slide->cover)) }});"></div>
                    <div class="shape">
                        <img src="{{ asset('storage/'. $slide->shape) }}" alt="{{ $slide->title }}">
                    </div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-9">
                                <div class="content">
                                    @if($slide->badge_text)
                                    <div class="badge">
                                        <div class="curve-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                                <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                                <text><textPath href="#textPath">{{ $slide->badge_text }}</textPath></text>
                                            </svg>
                                            @if($slide->badge_link)
                                            <a href="{{ $slide->badge_link }}" class="popup-youtube"><i class="fas fa-arrow-right"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                    @endif
                                    <div class="info">
                                        <h2>{{ $slide->title }}</h2>
                                        <p>{{ $slide->excerpt }}</p>
                                        @if($slide->link)
                                        <div class="button">
                                            <a class="btn btn-theme btn-md radius animation" href="{{ $slide->link }}">{{ $slide->link_title ?? 'Discover More' }}</a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Start About
    ============================================= -->
    @include('partials.about')

    <!-- Start Services
    ============================================= -->
    <div class="services-style-one-area bg-gray default-padding bottom-less">
        <div class="shape-right-top" style="background-image: url({{ asset('assets/img/shape/9.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Nos services</h5>
                        <h2 class="title">Agriculture durable et efficace</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-style-two-carousel swiper mb--30">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            @foreach($services as $service)
                                <div class="swiper-slide">
                                    <div class="service-style-two">
                                        <div class="thumb">
                                            <a href="{{ route('services.show', $service->slug) }}"><img src="{{ asset('storage/'. $service->image) }}" alt="{{ $service->name }}"></a>
                                        </div>
                                        <div class="overlay">
                                            <div class="info">
                                                <p>{{ $service->excerpt }}</p>
                                                <span><a href="{{ route('services.show', $service->slug) }}">{{ $service->name }}</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Navigation -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Benifits
    ============================================= -->
    <div class="benifits-area default-padding-top video-bg-live bg-cover mt--50 mt-md-0 mt-xs-0" style="background-image: url({{ asset('assets/img/2440x1578.png') }});">
        <div class="player" data-property="{videoURL:'w9eRIGTHKJM',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:13, opacity:1, quality:'default'}"></div>
        <div class="shape-top-center" style="background-image: url({{ asset('assets/img/shape/10.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="benifit-items text-light">
                        <h2 class="title">Distributeurs de Produits Biologiques</h2>
                        <p>Nous nous engageons à fournir des produits agricoles de haute qualité, cultivés de manière durable et respectueuse de l'environnement. Notre mission est de promouvoir une agriculture moderne tout en préservant la santé de notre planète.</p>
                        <ul class="list-standard">
                            <li>Équipements agricoles modernes</li>
                            <li>Récoltes exceptionnelles de blé</li>
                            <li>Fruits et légumes frais</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Products
    ============================================= -->
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

    <!-- Start Transformations
    ============================================= -->
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

    <!-- Start Partners
    ============================================= -->
    @include('partials.partners')

    <!-- Start Testimonial
    ============================================= -->
    <div class="testimonial-area default-padding bg-gray" style="background-image: url({{ asset('assets/img/shape/13.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="testimonial-heading">
                        <h2>Témoignages</h2>
                    </div>
                    <div class="testimonial-carousel testimonial-style-one swiper">
                        <div class="swiper-wrapper">
                            @foreach($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('storage/'. $testimonial->image) }}" alt="{{ $testimonial->name }}">
                                    </div>
                                    <div class="info">
                                        <img src="{{ asset('assets/img/shape/quote-big.png') }}" alt="Image Not Found">
                                        <p>{{ $testimonial->content }}</p>
                                        <div class="provider">
                                            <div class="content">
                                                <h4>{{ $testimonial->name }}</h4>
                                                <span>{{ $testimonial->position }}</span>
                                            </div>
                                            <div class="rating">
                                                @for($i = 0; $i < $testimonial->rating; $i++)
                                                    <i class="fas fa-star"></i>
                                                @endfor
                                                <span>&nbsp; ({{ $testimonial->rating }})</span>
                                            </div>
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
    </div>

    <!-- Start Contact Us
    ============================================= -->
    <div class="contact-area overflow-hidden bg-gray default-padding">
        <div class="sahpe-right-bottom">
            <img src="{{ asset('assets/img/shape/16.png') }}" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row align-center">

                <div class="col-tact-stye-one col-xl-6 col-lg-7">
                    <div class="contact-form-style-one mb-md-50">
                        <img src="{{ ('assets/img/illustration/10.png') }}" alt="Image Not Found">
                        <h5 class="sub-title">Des questions ?</h5>
                        <h2 class="heading">Envoyez-nous un message</h2>
                        @include('partials.contact-form')
                    </div>
                </div>
                <div class="col-tact-stye-one col-xl-5 offset-xl-1 col-lg-5">
                    <div class="contact-style-one-info text-light">
                        <h2>
                            Contact
                            <span>
                                Informations
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0" style="animation-play-state: running;"></path></svg>
                            </span>
                        </h2>
                        <p>Nous sommes là pour répondre à toutes vos questions sur nos services agricoles. N'hésitez pas à nous contacter pour plus d'informations.</p>
                        <ul>
                            <li>
                                <div class="content">
                                    <h5 class="title">Numéro de Téléphone</h5>
                                    <a href="tel:{{ setting('contact.phone') }}">{{ setting('contact.phone') }}</a>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h5 class="title">Notre Localisation</h5>
                                    <a href="{{ setting('contact.location') }}">
                                        {{ setting('contact.address') }}
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h5 class="title">Email Officiel</h5>
                                    <a href="mailto:{{ setting('contact.email') }}">{{ setting('contact.email') }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area home-blog default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Derniers blogs</h5>
                        <h2 class="title">Consultez nos articles de blog </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12 mb-30">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <img src="{{ asset('storage/'. $posts[0]->image) }}" alt="{{ route('blogs.show', $posts[0]->title) }}">
                            <div class="overlay text-light">
                                <h3 class="post-title"><a href="{{ route('blogs.show', $posts[0]->slug) }}">{{ $posts[0]->title }}</a></h3>
                                <p>{{ $posts[0]->excerpt }}</p>
                                <a href="{{ route('blogs.show', $posts[0]->slug) }}" class="button-regular">Continue <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($posts->skip(1) as $post)
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="{{ route('blogs.show', $post->slug) }}"><img src="{{ asset('storage/'. $post->image) }}" alt="Image Not Found"></a>
                            <div class="date"><strong>{{ $post->created_at->format('d') }}</strong> <span>{{ $post->created_at->format('M Y') }}</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li><a href="{{ route('about') }}">{{ setting('site.title') }}</a></li>
                                    <li>{{ $post->created_at->format('d M, Y') }}</li>
                                </ul>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blogs.show', $post->slug) }}">{{ $post->title }}</a></h3>
                            <a href="{{ route('blogs.show', $post->slug) }}" class="button-regular">Continue <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
