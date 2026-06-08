{{--
  Content Blocks Builder

  Renders the modular block editor. Each block has:
    - drag handle (reorder)
    - optional heading + level (H2/H3)
    - image position (left/right)
    - optional image upload + preview
    - TinyMCE-backed text content
    - delete button

  Variables expected:
    $blocks  array  — current saved blocks (empty array for new pages)
--}}
@php
    $blocks = $blocks ?? [];
@endphp

<div class="panel">
    <div class="panel-header">
        <div class="panel-header-left">
            <h3 class="panel-title">Content Blocks</h3>
        </div>
        <span class="form-hint" style="margin:0; color: rgba(255,255,255,0.5);">
            Drag the handle to reorder. Image is optional — without it, text spans full width.
        </span>
    </div>
    <div class="panel-body">
        <input type="hidden" name="_block_order" id="cb-order" value="{{ implode(',', array_map(fn($b) => $b['id'] ?? '', $blocks)) }}">

        <div id="cb-list">
            @foreach ($blocks as $b)
                @php
                    $bid = $b['id'] ?? ('blk_' . bin2hex(random_bytes(4)));
                @endphp
                <div class="cb-block" data-block-id="{{ $bid }}">
                    <div class="cb-block-header">
                        <span class="cb-drag-handle" title="Drag to reorder">&#9776;</span>
                        <span class="cb-block-label">Section</span>
                        <button type="button" class="cb-delete-btn" title="Delete this section">&times;</button>
                    </div>
                    <div class="cb-block-body">
                        <div class="cb-row-2col">
                            <div class="form-group">
                                <label>Heading (optional)</label>
                                <input type="text" name="content_blocks[{{ $bid }}][heading]" class="form-control" value="{{ $b['heading'] ?? '' }}" placeholder="e.g. Online Cricket ID in India">
                            </div>
                            <div class="form-group">
                                <label>Heading level</label>
                                <select name="content_blocks[{{ $bid }}][heading_level]" class="form-control">
                                    <option value="h2" {{ ($b['heading_level'] ?? 'h2') === 'h2' ? 'selected' : '' }}>H2 (larger)</option>
                                    <option value="h3" {{ ($b['heading_level'] ?? 'h2') === 'h3' ? 'selected' : '' }}>H3 (smaller)</option>
                                </select>
                            </div>
                        </div>

                        <div class="cb-row-2col">
                            <div class="form-group">
                                <label>Image position</label>
                                <div class="cb-radio-group">
                                    <label class="cb-radio">
                                        <input type="radio" name="content_blocks[{{ $bid }}][image_position]" value="left" {{ ($b['image_position'] ?? 'right') === 'left' ? 'checked' : '' }}>
                                        <span>Left</span>
                                    </label>
                                    <label class="cb-radio">
                                        <input type="radio" name="content_blocks[{{ $bid }}][image_position]" value="right" {{ ($b['image_position'] ?? 'right') === 'right' ? 'checked' : '' }}>
                                        <span>Right</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image alt text (for screen readers / SEO)</label>
                                <input type="text" name="content_blocks[{{ $bid }}][image_alt]" class="form-control" value="{{ $b['image_alt'] ?? '' }}" placeholder="Describe the image">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Image (optional, max 2 MB; jpg/png/webp)</label>
                            <input type="hidden" name="content_blocks[{{ $bid }}][image_url]" value="{{ $b['image_url'] ?? '' }}">
                            <input type="hidden" name="content_blocks[{{ $bid }}][_image_removed]" value="0" class="cb-image-removed-flag">
                            <div class="cb-image-row">
                                <div class="cb-image-preview" style="{{ !empty($b['image_url']) ? '' : 'display:none;' }}">
                                    <img src="{{ !empty($b['image_url']) ? asset(ltrim($b['image_url'], '/')) : '' }}" alt="">
                                    <button type="button" class="cb-image-remove" title="Remove image">Remove</button>
                                </div>
                                <input type="file" name="content_blocks[{{ $bid }}][image_file]" class="form-control cb-image-file" accept="image/jpeg,image/png,image/webp">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Text content</label>
                            <textarea name="content_blocks[{{ $bid }}][content]" class="form-control cb-editor" rows="10">{{ $b['content'] ?? '' }}</textarea>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div style="margin-top: 16px;">
            <button type="button" id="cb-add-btn" class="btn btn-outline">+ Add Section</button>
        </div>
    </div>
</div>

{{-- Hidden template cloned by JS for new blocks. Uses __ID__ placeholder
     that JS replaces with a fresh client-side block id on insertion. --}}
<template id="cb-block-template">
    <div class="cb-block" data-block-id="__ID__">
        <div class="cb-block-header">
            <span class="cb-drag-handle" title="Drag to reorder">&#9776;</span>
            <span class="cb-block-label">Section</span>
            <button type="button" class="cb-delete-btn" title="Delete this section">&times;</button>
        </div>
        <div class="cb-block-body">
            <div class="cb-row-2col">
                <div class="form-group">
                    <label>Heading (optional)</label>
                    <input type="text" name="content_blocks[__ID__][heading]" class="form-control" value="" placeholder="e.g. Online Cricket ID in India">
                </div>
                <div class="form-group">
                    <label>Heading level</label>
                    <select name="content_blocks[__ID__][heading_level]" class="form-control">
                        <option value="h2" selected>H2 (larger)</option>
                        <option value="h3">H3 (smaller)</option>
                    </select>
                </div>
            </div>

            <div class="cb-row-2col">
                <div class="form-group">
                    <label>Image position</label>
                    <div class="cb-radio-group">
                        <label class="cb-radio"><input type="radio" name="content_blocks[__ID__][image_position]" value="left"> <span>Left</span></label>
                        <label class="cb-radio"><input type="radio" name="content_blocks[__ID__][image_position]" value="right" checked> <span>Right</span></label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Image alt text</label>
                    <input type="text" name="content_blocks[__ID__][image_alt]" class="form-control" placeholder="Describe the image">
                </div>
            </div>

            <div class="form-group">
                <label>Image (optional, max 2 MB; jpg/png/webp)</label>
                <input type="hidden" name="content_blocks[__ID__][image_url]" value="">
                <input type="hidden" name="content_blocks[__ID__][_image_removed]" value="0" class="cb-image-removed-flag">
                <div class="cb-image-row">
                    <div class="cb-image-preview" style="display:none;">
                        <img src="" alt="">
                        <button type="button" class="cb-image-remove" title="Remove image">Remove</button>
                    </div>
                    <input type="file" name="content_blocks[__ID__][image_file]" class="form-control cb-image-file" accept="image/jpeg,image/png,image/webp">
                </div>
            </div>

            <div class="form-group">
                <label>Text content</label>
                <textarea name="content_blocks[__ID__][content]" class="form-control cb-editor" rows="10"></textarea>
            </div>
        </div>
    </div>
</template>
