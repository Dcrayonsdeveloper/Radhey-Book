@extends('layouts.app')

@section('meta_title', $meta_title ?? $post->title . ' | Radhey Book Blog')
@section('meta_description', $meta_description ?? $post->excerpt)
@section('meta_keywords', $meta_keywords ?? '')

@section('content')

<section class="hero-section hero-sm">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Home</a> &raquo;
            <a href="{{ route('blog') }}">Blog</a> &raquo;
            <span>{{ $post->title }}</span>
        </div>
        <h1 class="hero-title">{{ $post->title }}</h1>
        <div class="blog-meta-hero">
            <span class="blog-date">{{ $post->published_at ? $post->published_at->format('M d, Y') : '' }}</span>
            <span class="blog-category">{{ $post->category }}</span>
            <span class="blog-read-time">5 min read</span>
        </div>
    </div>
</section>

<section class="section blog-single-section">
    <div class="container">
        <div class="blog-layout">
            <article class="blog-article">
                {!! $post->content !!}

                <div class="blog-cta-box">
                    <h3>Ready to Start Betting?</h3>
                    <p>Get your Radhey Betting ID now with {{ $siteSettings['welcome_bonus'] ?? '100' }}% welcome bonus!</p>
                    <a href="https://linktr.ee/radheybook" class="btn btn-gold" target="_blank" rel="noopener">Get Your ID on WhatsApp</a>
                </div>
            </article>

            <aside class="blog-sidebar">
                <div class="sidebar-widget">
                    <h3>Get Your Betting ID</h3>
                    <p>Instant activation via WhatsApp. {{ $siteSettings['welcome_bonus'] ?? '100' }}% welcome bonus on first deposit!</p>
                    <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-block" target="_blank" rel="noopener">Get ID Now</a>
                </div>

                <div class="sidebar-widget">
                    <h3>Popular Posts</h3>
                    <ul class="sidebar-posts">
                        @foreach($relatedPosts as $related)
                        <li><a href="{{ route('blog.show', $related->slug) }}">{{ $related->title }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="sidebar-widget">
                    <h3>Quick Links</h3>
                    <ul class="sidebar-links">
                        <li><a href="{{ route('cricket') }}">Cricket Betting ID</a></li>
                        <li><a href="{{ route('casino') }}">Casino ID</a></li>
                        <li><a href="{{ route('tennis') }}">Tennis Betting ID</a></li>
                        <li><a href="{{ route('football') }}">Football Betting ID</a></li>
                        <li><a href="{{ route('aviator') }}">Aviator Game</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>

@endsection
