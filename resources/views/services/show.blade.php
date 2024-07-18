@extends('layout.layout')

@section('title', setting('site.title') . " . " . $service->name)
@section('meta_description', $service->excerpt)

@section('content')

    <x-breadcrumb title="{{ $service->name }}">
        <li><a href="/"><i class="fas fa-home"></i> Accueil</a></li>
        <li><a href="{{ route('services.index') }}">Services</a></li>
        <li class="active">Details du Service</li>
    </x-breadcrumb>

    <!-- Star Services Details Area
    ============================================= -->
    <div class="services-details-area default-padding">
        <div class="container">
            <div class="services-details-items">
                <div class="row">

                    <div class="col-xl-8 col-lg-7 pl-45 pl-md-15 pl-xs-15 services-single-content order-lg-last">
                        <div class="thumb">
                            <img src="{{ asset('storage/'. $service->image) }}" alt="{{ $service->name }}">
                        </div>
                        <h2>{{ $service->name }}</h2>
                        <blockquote>{{ $service->excerpt }}</blockquote>
                        <div class="description">
                            {!! $service->description !!}
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5 mt-md-100 mt-xs-50 services-sidebar">
                        <div class="single-widget services-list-widget">
                            <div class="content">
                                <h3>Demande de Service</h3>
                                <p>Vous avez une demande spécifique? Contactez-nous et nous vous répondrons dans les plus brefs délais.</p>
                                <form action="{{ route('services.request') }}" method="POST" class="row g-2 needs-validation" novalidate>
                                    @csrf
                                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="name">Nom</label>
                                            <input class="form-control" id="name" name="name" placeholder="Votre Nom*" type="text" required>
                                            <div class="invalid-feedback">Veuillez saisir votre nom.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control" id="email" name="email" placeholder="Votre adresse email*" type="email" required>
                                            <div class="invalid-feedback">Veuillez saisir une adresse email valide.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="phone">Téléphone</label>
                                            <input class="form-control" id="phone" name="phone" placeholder="Votre numéro de téléphone*" type="text" required>
                                            <div class="invalid-feedback">Veuillez saisir votre numéro de téléphone.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <label for="details">Détails</label>
                                            <textarea class="form-control" id="details" name="details" rows="5" placeholder="Décrivez le service dont vous avez besoin *" required></textarea>
                                            <div class="invalid-feedback">Veuillez saisir les détails de votre demande.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            <i class="fa fa-paper-plane"></i> Envoyer
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                        <div class="single-widget quick-contact-widget text-light">
                            <div class="content">
                                <h3>Besoin d'aide?</h3>
                                <p>Vous avez des questions ou des préoccupations? N'hésitez pas à nous contacter.</p>
                                <h2><a href="tel:{{ setting('contact.phone') }}">{{ setting('contact.phone') }}</a></h2>
                                <h4><a href="mailto:{{ setting('contact.email') }}">{{ setting('contact.email') }}</a></h4>
                                <a class="btn mt-30 circle btn-theme animation btn-md" href="{{ route('contact') }}">Contactez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
