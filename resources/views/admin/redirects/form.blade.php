@extends('admin.layouts.app')
@section('title', $redirect->exists ? 'Edit Redirect' : 'New Redirect')

@section('content')
<div class="page-header">
    <p style="color:#b8b8b8;font-size:14px;margin:0;">{{ $redirect->exists ? 'Editing existing redirect.' : 'Map an old URL to a new one.' }}</p>
    <a href="{{ route('admin.redirects.index') }}" class="btn btn-sm btn-outline">&larr; All Redirects</a>
</div>

<form method="POST" action="{{ $redirect->exists ? route('admin.redirects.update', $redirect) : route('admin.redirects.store') }}">
    @csrf
    @if($redirect->exists) @method('PUT') @endif

    <div class="panel">
        <div class="panel-body">
            <div class="form-grid">
                <div class="form-group full-width">
                    <label>From path *</label>
                    <input type="text" name="from_path" class="form-control" value="{{ old('from_path', $redirect->from_path) }}" placeholder="/old-page-url" required style="font-family:monospace;">
                    <span class="form-hint">Path on this site, must start with <code>/</code>. Example: <code>/lord-exchange</code></span>
                    @error('from_path')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    <label>To path *</label>
                    <input type="text" name="to_path" class="form-control" value="{{ old('to_path', $redirect->to_path) }}" placeholder="/new-page-url or https://other-site.com/page" required style="font-family:monospace;">
                    <span class="form-hint">Either an internal path like <code>/lords-exchange</code> or a full external URL.</span>
                    @error('to_path')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Status code *</label>
                    <select name="status_code" class="form-control" required>
                        @foreach([301 => '301 — Moved Permanently (best for SEO)', 302 => '302 — Found (temporary)', 307 => '307 — Temporary (preserves method)', 308 => '308 — Permanent (preserves method)'] as $code => $label)
                            <option value="{{ $code }}" {{ (int) old('status_code', $redirect->status_code) === $code ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @error('status_code')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    @php $isOn = (bool) old('is_active', $redirect->exists ? $redirect->is_active : true); @endphp
                    <label class="toggle-label">
                        <span class="toggle-text">Active</span>
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" name="is_active" value="1" {{ $isOn ? 'checked' : '' }} class="toggle-checkbox">
                        <span class="toggle-switch"></span>
                    </label>
                    <span class="form-hint">Turn off to disable the redirect without deleting it.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-gold">{{ $redirect->exists ? 'Save Changes' : 'Create Redirect' }}</button>
        <a href="{{ route('admin.redirects.index') }}" class="btn btn-outline">Cancel</a>
    </div>
</form>
@endsection
