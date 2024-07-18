@extends('layout.layout')

@section('title', setting('site.title'))

@section('content')

    <x-breadcrumb title="Contact Us">
        <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
        <li class="active">Contact Us</li>
    </x-breadcrumb>

    <!-- Start Contact Us
    ============================================= -->
    <div class="contact-area contact-page overflow-hidden bg-gray default-padding">
        <div class="sahpe-right-bottom">
            <img src="{{ asset('assets/img/shape/16.png') }}" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row align-center">

                <div class="col-tact-stye-one col-xl-7 col-lg-7">
                    <div class="contact-form-style-one mb-md-50">
                        <img src="{{ asset('assets/img/illustration/10.png') }}" alt="Image Not Found">
                        <h5 class="sub-title">Des questions ?</h5>
                        <h2 class="heading">Envoyez-nous un message</h2>
                        @include('partials.contact-form')
                    </div>
                </div>
                <div class="col-tact-stye-one col-xl-5 col-lg-5 pl-80 pl-md-15 pl-xs-15">
                    <div class="contact-style-one-info">
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

@endsection
