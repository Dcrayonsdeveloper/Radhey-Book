@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Blog - Latest Betting Tips & Cricket News | Radhey Book')
@section('meta_description', $meta_description ?? '')
@section('meta_keywords', $meta_keywords ?? '')

@section('content')

<section class="hero-section hero-sm">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <h1 class="hero-title">Latest <span class="text-gold">News & Tips</span></h1>
        <p class="hero-subtitle">Stay updated with expert betting tips, cricket news, and guides</p>
    </div>
</section>

<section class="section blog-listing-section">
    <div class="container">
        <div class="blog-grid-full">
            @foreach($posts as $post)
            <div class="blog-card-horizontal">
                <div class="blog-card-image" style="background: linear-gradient(135deg, #1a1a2e, #2d1b4e);"></div>
                <div class="blog-card-content">
                    <div class="blog-meta">
                        <span class="blog-category">{{ $post->category }}</span>
                        <span class="blog-date">{{ $post->published_at ? $post->published_at->format('M d, Y') : '' }}</span>
                    </div>
                    <h2><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
                    <p>{{ $post->excerpt }}</p>
                    <a href="{{ route('blog.show', $post->slug) }}" class="blog-link">Read Full Article &rarr;</a>
                </div>
            </div>
            @endforeach
        </div>

        @if($posts->hasPages())
        <div style="margin-top: 40px; display: flex; justify-content: center;">
            {{ $posts->links() }}
        </div>
        @endif
    </div>
</section>

<section class="section cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Start <span class="text-gold">Betting</span>?</h2>
            <p>Get your Radhey Betting ID now and start winning!</p>
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">Get Your ID on WhatsApp</a>
        </div>
    </div>
</section>

@endsection
