@extends('admin.layouts.app')
@section('title', 'Create Page')

@section('content')
<div class="panel">
    <div class="panel-header">
        <h3 class="panel-title">New Page</h3>
        <a href="{{ route('admin.pages.index') }}" class="btn btn-sm btn-outline">&larr; Back</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.pages.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-grid">
                <div class="form-group full-width">
                    <label>Page Title *</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="e.g. Live Tennis Betting Tips" required>
                    @error('title')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    <label>URL Slug *</label>
                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}" placeholder="e.g. live-tennis-betting-tips" pattern="[a-z0-9][a-z0-9-]*" required>
                    <span class="form-hint">Lowercase letters, numbers, and hyphens only. The page will be at <code>/{slug}</code>.</span>
                    @error('slug')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width" style="border-top: 1px solid rgba(255,255,255,0.06); padding-top: 20px; margin-top: 8px;">
                    <label style="color: #d4af37; font-size: 14px;">SEO Settings</label>
                </div>

                <div class="form-group full-width">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title') }}" placeholder="Leave blank to use page title">
                    @error('meta_title')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    <label>Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="2" placeholder="SEO description shown in search results">{{ old('meta_description') }}</textarea>
                    @error('meta_description')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    <label>Meta Keywords</label>
                    <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords') }}" placeholder="keyword1, keyword2, keyword3">
                    @error('meta_keywords')<span class="form-error">{{ $message }}</span>@enderror
                </div>

            </div>

            @include('admin.pages.partials.content-blocks-builder', ['blocks' => old('content_blocks_initial', [])])

            <div class="form-actions">
                <button type="submit" class="btn btn-gold">Create Page</button>
                <a href="{{ route('admin.pages.index') }}" class="btn btn-outline">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script>
<script src="{{ asset('js/admin-content-blocks.js') }}?v={{ filemtime(public_path('js/admin-content-blocks.js')) }}"></script>
<script>
    // Auto-fill slug from title (only while user hasn't typed in slug field manually)
    (function() {
        var title = document.querySelector('input[name="title"]');
        var slug  = document.querySelector('input[name="slug"]');
        if (!title || !slug) return;
        var manual = false;
        slug.addEventListener('input', function() { manual = true; });
        title.addEventListener('input', function() {
            if (manual) return;
            slug.value = title.value
                .toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '')
                .trim()
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');
        });
    })();
</script>
@endsection
