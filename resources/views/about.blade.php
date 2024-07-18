@extends('layout.layout')

@section('title', setting('site.title'))

@section('content')

    <x-breadcrumb title="About Us">
        <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
        <li class="active">About Us</li>
    </x-breadcrumb>

    <!-- Start About
    ============================================= -->
    @include('partials.about')

    <!-- Start Partners
    ============================================= -->
    @include('partials.partners')

@endsection
