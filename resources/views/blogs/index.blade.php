@extends('layout.layout')

@section('title', setting('site.title') . ' . Blogs')

@section('content')

    <!-- breadcrumb part start -->
    <x-breadcrumb title="Blogs">
        <li><a href="/">Home</a></li>
        <li class="active">Blogs</li>
    </x-breadcrumb>

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog blog-standard default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-content col-xl-10 offset-xl-1 col-md-12">
                    <div class="blog-item-box">
                        @forelse($posts as $post)
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ route('blogs.show', $post->slug) }}"><img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->title }}"></a>
                                <div class="date"><strong>{{ $post->created_at->format('d') }}</strong> <span>{{ $post->created_at->format('F Y') }}</span></div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li><a href="{{ route('about') }}">Admin</a></li>
                                        <li><a href="{{ route('blogs.category', $post->category->slug) }}">{{ $post->category->name }}</a></li>
                                    </ul>
                                </div>
                                <h2 class="title">
                                    <a href="{{ route('blogs.show', $post->slug) }}">{{ $post->title }}</a>
                                </h2>
                                <p>{{ $post->excerpt }}</p>
                                <a class="btn mt-10 btn-md btn-theme secondary animation" href="{{ route('blogs.show', $post->slug) }}">En savoir plus</a>
                            </div>
                        </div>
                        @empty
                        <div class="alert alert-warning" role="alert">
                            <strong>Aucun article trouvé</strong>
                        </div>
                        @endforelse
                    </div>
                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 pagi-area text-center">
                            <nav aria-label="navigation">
                                <ul class="pagination">
                                    @if ($posts->onFirstPage())
                                    <li class="page-item disabled"><a class="page-link" disabled><i class="fas fa-angle-left"></i></a></li>
                                    @else
                                    <li class="page-item"><a class="page-link" href="{{ $posts->previousPageUrl() }}" rel="prev"><i class="fas fa-angle-left"></i></a></li>
                                    @endif
                                    @for ($i = 1; $i <= $posts->lastPage(); $i++)
                                        @if ($i == $posts->currentPage())
                                            <li class="page-item active"><a class="page-link" disabled>{{ $i }}</a></li>
                                        @else
                                            <li class="page-item"><a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a></li>
                                        @endif
                                    @endfor
                                    @if ($posts->hasMorePages())
                                    <li class="page-item"><a class="page-link" href="{{ $posts->nextPageUrl() }}" rel="next"><i class="fas fa-angle-right"></i></a></li>
                                    @else
                                    <li class="page-item disabled"><a class="page-link" disabled><i class="fas fa-angle-right"></i></a></li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
