@extends('admin.layouts.app')
@section('title', 'Create Page')

@section('content')
<div class="panel">
    <div class="panel-header">
        <h3 class="panel-title">New Page</h3>
        <a href="{{ route('admin.pages.index') }}" class="btn btn-sm btn-outline">&larr; Back</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.pages.store') }}">
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

                <div class="form-group full-width" style="border-top: 1px solid rgba(255,255,255,0.06); padding-top: 20px; margin-top: 8px;">
                    <label style="color: #d4af37; font-size: 14px;">Page Content</label>
                </div>

                <div class="form-group full-width">
                    <label>Body Content</label>
                    <textarea name="content" class="form-control" rows="15" placeholder="Page body content. You can add more sections later via the edit screen.">{{ old('content') }}</textarea>
                    <span class="form-hint">HTML tags are supported for formatting.</span>
                    @error('content')<span class="form-error">{{ $message }}</span>@enderror
                </div>
            </div>

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
<script>
    tinymce.init({
        selector: 'textarea[name="content"]',
        plugins: 'lists link image code table',
        toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image | code',
        height: 400,
        skin: 'oxide-dark',
        content_css: 'dark',
        menubar: false,
    });

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
