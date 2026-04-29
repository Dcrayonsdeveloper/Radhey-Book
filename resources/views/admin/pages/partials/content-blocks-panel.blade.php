{{-- Content Blocks Builder Panel --}}
@php $existingBlocksJson = $page->section('content_blocks', '[]'); @endphp

<div class="panel" id="content-blocks-panel" style="margin-bottom:20px;">
    <div class="panel-header">
        <h3 class="panel-title">Content Blocks</h3>
        <span style="font-size:12px;color:#888;margin-left:10px;">Extra content displayed below page sections</span>
    </div>
    <div class="panel-body">
        <input type="hidden"
               name="sections[content_blocks]"
               id="content-blocks-data"
               value="{!! e($existingBlocksJson) !!}">

        <div class="block-builder" id="block-builder-list">
            <div class="block-empty-state" id="block-empty-msg">No blocks yet. Add one below.</div>
        </div>

        <div class="block-type-selector">
            <button type="button" class="block-type-btn" data-block-type="heading_h2">H2 Heading</button>
            <button type="button" class="block-type-btn" data-block-type="heading_h3">H3 Heading</button>
            <button type="button" class="block-type-btn" data-block-type="paragraph">Paragraph</button>
            <button type="button" class="block-type-btn" data-block-type="html">HTML Block</button>
            <button type="button" class="block-type-btn" data-block-type="divider">Divider</button>
            <button type="button" class="block-type-btn" data-block-type="button">Button (CTA)</button>
        </div>
    </div>
</div>
