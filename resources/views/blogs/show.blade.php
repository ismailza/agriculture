@extends('layout.layout')

@section('title', setting('site.title') . ' . ' . $post->title)
@section('meta_description', $post->meta_description)
@section('meta_keywords', $post->meta_keywords)

@section('content')

    <!-- breadcrumb part start -->
    <x-breadcrumb title="{!! $post->title !!}">
        <li><a href="/">Home</a></li>
        <li><a href="{{ route('blogs.index') }}">Blogs</a></li>
        <li class="active">Details du post</li>
    </x-breadcrumb>

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15">
                        <div class="blog-style-two item">
                            <div class="thumb">
                                <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->title }}">
                                <div class="date"><strong>{{ $post->created_at->format('d') }}</strong> <span>{{ $post->created_at->format('F Y') }}</span></div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li><a href="{{ route('about') }}">Admin</a></li>
                                        <li><a href="{{ route('blogs.category', $post->category->slug) }}">{{ $post->category->name }}</a></li>
                                    </ul>
                                </div>
                                <blockquote>{{ $post->excerpt }}</blockquote>
                                {!! $post->body !!}
                            </div>
                        </div>

                        <!-- Post Tags Share -->
                        <div class="post-tags share">
                            <div class="social">
                                <h4>Share:</h4>
                                <ul>
                                    <li>
                                        <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('blogs.show', $post->slug)) }}" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="https://twitter.com/intent/tweet?url={{ urlencode(route('blogs.show', $post->slug)) }}&text={{ urlencode($post->title) }}" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pinterest" href="https://pinterest.com/pin/create/button/?url={{ urlencode(route('blogs.show', $post->slug)) }}&media={{ urlencode(asset('storage/' . $post->image)) }}&description={{ urlencode($post->title) }}" target="_blank">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('blogs.show', $post->slug)) }}&title={{ urlencode($post->title) }}&summary={{ urlencode($post->excerpt) }}" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Start Sidebar -->
                    <div class="sidebar col-xl-4 col-lg-5 col-md-12 mt-md-100 mt-xs-50">
                        <aside>
                            <div class="sidebar-item recent-post">
                                <h4 class="title">Articles récents</h4>
                                <ul>
                                    @foreach($recentPosts as $recentPost)
                                    <li>
                                        <div class="thumb">
                                            <a href="{{ route('blogs.show', $recentPost->slug) }}">
                                                <img src="{{ asset('storage/'. $recentPost->image) }}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="meta-title">
                                                <span class="post-date">{{ $recentPost->created_at->format('d M, Y') }}</span>
                                            </div>
                                            <a href="{{ route('blogs.show', $recentPost->slug) }}">{{ $recentPost->title }}</a>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="sidebar-item category">
                                <h4 class="title">Categories</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        @foreach($categories as $category)
                                        <li>
                                            <a href="{{ route('blogs.category', $category->slug) }}"> {{ $category->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item tags">
                                <h4 class="title">tags</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        @foreach($postTags as $tag)
                                            <li><a>{{ $tag }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
