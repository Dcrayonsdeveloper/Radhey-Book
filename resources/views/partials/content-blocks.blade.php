@php
    $rawBlocks = $page->section('content_blocks', '[]');
    $blocks = json_decode($rawBlocks, true);
    if (!is_array($blocks) || empty($blocks)) return;
    $wa = $siteSettings['whatsapp_number'] ?? '917901712857';
@endphp

<section class="section" id="page-content-blocks" style="padding-top:0;">
    <div class="container" style="max-width:860px;">
        @foreach($blocks as $block)
            @php $type = $block['type'] ?? ''; $content = $block['content'] ?? ''; @endphp

            @if($type === 'heading_h2')
                <h2 style="color:#fff;font-size:1.75rem;font-weight:700;margin:2rem 0 1rem;">{{ $content }}</h2>

            @elseif($type === 'heading_h3')
                <h3 style="color:#d4af37;font-size:1.25rem;font-weight:600;margin:1.5rem 0 0.75rem;">{{ $content }}</h3>

            @elseif($type === 'paragraph')
                <p style="color:#b0b0c8;line-height:1.8;margin-bottom:1rem;">{{ $content }}</p>

            @elseif($type === 'html')
                <div class="content-block" style="margin-bottom:1.5rem;">{!! $content !!}</div>

            @elseif($type === 'divider')
                <hr style="border:none;border-top:1px solid rgba(212,175,55,0.2);margin:2rem 0;">

            @elseif($type === 'button')
                <div style="margin:1.5rem 0;">
                    <a href="https://linktr.ee/radheybook"
                       class="btn btn-gold"
                       target="_blank" rel="noopener">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.61.609l4.458-1.495A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.682-6.297-1.848l-.44-.292-3.065 1.027 1.027-3.065-.292-.44A9.965 9.965 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                        {{ $content ?: 'Get Your Betting ID' }}
                    </a>
                </div>
            @endif
        @endforeach
    </div>
</section>
