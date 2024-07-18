@extends('layout.layout')

@section('title', setting('site.title') . " . Services")

@section('content')

    <x-breadcrumb title="Services">
        <li><a href="/"><i class="fas fa-home"></i> Accueil</a></li>
        <li class="active">Services</li>
    </x-breadcrumb>

    <div class="gallery-style-two-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 gallery-content">
                    <div class="magnific-mix-gallery gallery-masonary">
                        <div id="gallery-masonary" class="gallery-items colums-3">
                            @foreach($services as $service)
                            <div class="gallery-item">
                                <div class="gallery-style-one">
                                    <a href="{{ route('services.show', $service->slug) }}">
                                        <img src="{{ asset('storage/'. $service->image) }}" alt="{{ $service->name }}">
                                    </a>
                                    <div class="overlay">
                                        <h4><a href="{{ route('services.show', $service->slug) }}">{{ $service->name }}</a></h4>
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

@endsection
