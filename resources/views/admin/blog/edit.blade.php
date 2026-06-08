@extends('admin.layouts.app')
@section('title', 'Edit Blog Post')

@section('content')
<div class="panel">
    <div class="panel-header">
        <h3 class="panel-title">Edit: {{ Str::limit($blog->title, 40) }}</h3>
        <a href="{{ route('admin.blog.index') }}" class="btn btn-sm btn-outline">&larr; Back</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.blog.update', $blog) }}" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="form-grid">
                <div class="form-group full-width">
                    <label>Title *</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                    @error('title')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Category *</label>
                    <select name="category" class="form-control" required>
                        @foreach(['Guides','Cricket','Casino','Football','Tennis','Education','Games','Safety','News','General'] as $cat)
                        <option value="{{ $cat }}" {{ old('category', $blog->category) == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                    @error('category')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Status *</label>
                    <select name="status" id="post-status" class="form-control" required>
                        <option value="draft" {{ old('status', $blog->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status', $blog->status) == 'published' ? 'selected' : '' }}>Published</option>
                        <option value="scheduled" {{ old('status', $blog->status) == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                    </select>
                </div>

                @php
                    $existingStatus = old('status', $blog->status);
                    // Only pre-fill the schedule input when we are actually scheduling — otherwise
                    // leaving the past publish_at value in a hidden, min-constrained input silently
                    // blocks form submission via HTML5 validation.
                    $existingScheduledAt = $existingStatus === 'scheduled'
                        ? old('scheduled_at', optional($blog->published_at)->format('Y-m-d\TH:i'))
                        : old('scheduled_at', '');
                @endphp
                <div class="form-group" id="schedule-field" style="{{ $existingStatus === 'scheduled' ? '' : 'display:none;' }}">
                    <label>Schedule for *</label>
                    <input type="datetime-local" name="scheduled_at" class="form-control" value="{{ $existingScheduledAt }}">
                    <span class="form-hint">Post will go live automatically at this time.</span>
                    @error('scheduled_at')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    <label>Excerpt *</label>
                    <textarea name="excerpt" class="form-control" rows="3" required>{{ old('excerpt', $blog->excerpt) }}</textarea>
                    @error('excerpt')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    <label>Content *</label>
                    <textarea name="content" class="form-control" rows="15">{{ old('content', $blog->content) }}</textarea>
                    <span class="form-hint">HTML tags are supported.</span>
                    @error('content')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    <label>Featured Image</label>
                    @if($blog->image)
                        <div style="margin-bottom: 10px;">
                            <img src="{{ asset($blog->image) }}" alt="Current featured image" style="max-width: 220px; height: auto; border-radius: 6px; border: 1px solid rgba(255,255,255,0.1);">
                            <div style="margin-top: 6px;"><span class="form-hint">Current: {{ $blog->image }}</span></div>
                        </div>
                    @endif
                    <input type="file" name="image_file" class="form-control" accept="image/*">
                    <span class="form-hint">Upload to replace — leave empty to keep current. JPG, PNG, WebP, max 2 MB.</span>
                    @error('image_file')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width" style="border-top: 1px solid rgba(255,255,255,0.06); padding-top: 20px; margin-top: 8px;">
                    <label style="color: #d4af37; font-size: 14px;">SEO Settings</label>
                </div>

                <div class="form-group full-width">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $blog->meta_title) }}">
                </div>

                <div class="form-group full-width">
                    <label>Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description', $blog->meta_description) }}</textarea>
                </div>

                <div class="form-group full-width">
                    <label>Meta Keywords</label>
                    <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $blog->meta_keywords) }}">
                </div>

                <div class="form-group full-width">
                    <label>Canonical URL</label>
                    <input type="text" name="canonical_url" class="form-control" value="{{ old('canonical_url', $blog->canonical_url) }}" placeholder="https://radheybook.com/blog/my-custom-slug">
                    <span class="form-hint">The last segment of this URL becomes the post's slug. Current post URL: <code>{{ route('blog.show', $blog->slug) }}</code></span>
                    @error('canonical_url')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    @php $noindexOn = (bool) old('noindex', $blog->noindex); @endphp
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
                <button type="submit" class="btn btn-gold">Update Post</button>
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
