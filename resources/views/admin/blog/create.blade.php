@extends('admin.layouts.app')
@section('title', 'Create Blog Post')

@section('content')
<div class="panel">
    <div class="panel-header">
        <h3 class="panel-title">New Blog Post</h3>
        <a href="{{ route('admin.blog.index') }}" class="btn btn-sm btn-outline">&larr; Back</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.blog.store') }}">
            @csrf
            <div class="form-grid">
                <div class="form-group full-width">
                    <label>Title *</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Enter post title" required>
                    @error('title')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Category *</label>
                    <select name="category" class="form-control" required>
                        <option value="">Select category</option>
                        <option value="Guides" {{ old('category') == 'Guides' ? 'selected' : '' }}>Guides</option>
                        <option value="Cricket" {{ old('category') == 'Cricket' ? 'selected' : '' }}>Cricket</option>
                        <option value="Casino" {{ old('category') == 'Casino' ? 'selected' : '' }}>Casino</option>
                        <option value="Football" {{ old('category') == 'Football' ? 'selected' : '' }}>Football</option>
                        <option value="Tennis" {{ old('category') == 'Tennis' ? 'selected' : '' }}>Tennis</option>
                        <option value="Education" {{ old('category') == 'Education' ? 'selected' : '' }}>Education</option>
                        <option value="Games" {{ old('category') == 'Games' ? 'selected' : '' }}>Games</option>
                        <option value="Safety" {{ old('category') == 'Safety' ? 'selected' : '' }}>Safety</option>
                        <option value="News" {{ old('category') == 'News' ? 'selected' : '' }}>News</option>
                        <option value="General" {{ old('category') == 'General' ? 'selected' : '' }}>General</option>
                    </select>
                    @error('category')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Status *</label>
                    <select name="status" id="post-status" class="form-control" required>
                        <option value="draft" {{ old('status', 'draft') == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                        <option value="scheduled" {{ old('status') == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                    </select>
                </div>

                <div class="form-group" id="schedule-field" style="{{ old('status') === 'scheduled' ? '' : 'display:none;' }}">
                    <label>Schedule for *</label>
                    <input type="datetime-local" name="scheduled_at" class="form-control" value="{{ old('scheduled_at') }}" min="{{ now()->format('Y-m-d\TH:i') }}">
                    <span class="form-hint">Post will go live automatically at this time.</span>
                    @error('scheduled_at')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    <label>Excerpt *</label>
                    <textarea name="excerpt" class="form-control" rows="3" placeholder="Brief summary of the post" required>{{ old('excerpt') }}</textarea>
                    @error('excerpt')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    <label>Content *</label>
                    <textarea name="content" class="form-control" rows="15" placeholder="Full post content (HTML supported)" required>{{ old('content') }}</textarea>
                    <span class="form-hint">HTML tags are supported for formatting.</span>
                    @error('content')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    <label>Image Path</label>
                    <input type="text" name="image" class="form-control" value="{{ old('image') }}" placeholder="blog/image-name.jpg">
                    <span class="form-hint">Relative path to image in public/images/</span>
                </div>

                <div class="form-group full-width" style="border-top: 1px solid rgba(255,255,255,0.06); padding-top: 20px; margin-top: 8px;">
                    <label style="color: #d4af37; font-size: 14px;">SEO Settings</label>
                </div>

                <div class="form-group full-width">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title') }}" placeholder="SEO title (leave blank to use post title)">
                </div>

                <div class="form-group full-width">
                    <label>Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="2" placeholder="SEO description">{{ old('meta_description') }}</textarea>
                </div>

                <div class="form-group full-width">
                    <label>Meta Keywords</label>
                    <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords') }}" placeholder="keyword1, keyword2, keyword3">
                </div>

                <div class="form-group full-width">
                    <label>Canonical URL</label>
                    <input type="url" name="canonical_url" class="form-control" value="{{ old('canonical_url') }}" placeholder="https://example.com/preferred-url">
                    <span class="form-hint">Optional. Override the canonical URL for this post.</span>
                    @error('canonical_url')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    @php $noindexOn = (bool) old('noindex', false); @endphp
                    <label class="toggle-label">
                        <span class="toggle-text">Hide from search engines (noindex, nofollow)</span>
                        <input type="hidden" name="noindex" value="0">
                        <input type="checkbox" name="noindex" value="1" {{ $noindexOn ? 'checked' : '' }} class="toggle-checkbox">
                        <span class="toggle-switch"></span>
                    </label>
                    <span class="form-hint">When ON, search engines are told not to index this post or follow its links.</span>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-gold">Create Post</button>
                <a href="{{ route('admin.blog.index') }}" class="btn btn-outline">Cancel</a>
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

    // Show/hide the schedule datetime field when status changes
    (function () {
        var statusEl = document.getElementById('post-status');
        var scheduleField = document.getElementById('schedule-field');
        if (!statusEl || !scheduleField) return;

        var scheduleInput = scheduleField.querySelector('input[name="scheduled_at"]');

        function sync() {
            var isScheduled = statusEl.value === 'scheduled';
            scheduleField.style.display = isScheduled ? '' : 'none';
            if (scheduleInput) scheduleInput.required = isScheduled;
        }
        statusEl.addEventListener('change', sync);
        sync();
    })();
</script>
@endsection
