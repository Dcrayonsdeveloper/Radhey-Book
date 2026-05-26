@extends('layouts.app')

@section('content')
<section class="hero-section hero-sm">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <h1 class="hero-title">{{ $page->title }}</h1>
    </div>
</section>

<section class="section">
    <div class="container">
        <article class="page-content" style="max-width: 900px; margin: 0 auto; color: rgba(255,255,255,0.85); font-size: 16px; line-height: 1.85;">
            {!! $page->section('content', '') !!}
        </article>
    </div>
</section>
@endsection
