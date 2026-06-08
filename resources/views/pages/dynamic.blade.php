@extends('layouts.app')

@section('content')
<section class="hero-section hero-sm">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <h1 class="hero-title">{{ $page->title }}</h1>
    </div>
</section>

@php $blocks = $page->content_blocks ?? []; @endphp

@if (!empty($blocks))
    <section class="section">
        <div class="container">
            @foreach ($blocks as $block)
                <article class="page-block">
                    @if (!empty($block['heading']))
                        @php $tag = in_array($block['heading_level'] ?? 'h2', ['h2', 'h3'], true) ? $block['heading_level'] : 'h2'; @endphp
                        <{{ $tag }} class="block-heading">{{ $block['heading'] }}</{{ $tag }}>
                    @endif
                    <div class="block-row image-{{ $block['image_position'] ?? 'right' }} {{ empty($block['image_url']) ? 'full-width' : '' }}">
                        <div class="block-text">{!! $block['content'] ?? '' !!}</div>
                        @if (!empty($block['image_url']))
                            <div class="block-image-wrap">
                                <img src="{{ asset(ltrim($block['image_url'], '/')) }}"
                                     alt="{{ $block['image_alt'] ?? '' }}"
                                     class="block-image"
                                     loading="lazy">
                            </div>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@else
    {{-- Fallback: legacy pages that still store body content in sections['content'] --}}
    <section class="section">
        <div class="container">
            <article class="page-content" style="max-width: 900px; margin: 0 auto; color: rgba(255,255,255,0.85); font-size: 16px; line-height: 1.85;">
                {!! $page->section('content', '') !!}
            </article>
        </div>
    </section>
@endif
@endsection
