@extends('admin.layouts.app')
@section('title', 'Blog Posts')

@section('content')
<div class="page-header">
    <p>Manage your blog posts</p>
    <a href="{{ route('admin.blog.create') }}" class="btn btn-gold">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        New Post
    </a>
</div>

<div class="panel">
    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                <tr>
                    <td style="max-width: 300px;">
                        <strong style="color: #fff;">{{ Str::limit($post->title, 50) }}</strong>
                        <div style="font-size: 12px; color: #b0b0b0; margin-top: 2px;">/blog/{{ $post->slug }}</div>
                    </td>
                    <td><span class="badge badge-gold">{{ $post->category }}</span></td>
                    <td>
                        @if($post->status === 'scheduled' && $post->isScheduledForFuture())
                            {{-- Scheduled posts can't be inline-toggled (need a date) — read-only badge --}}
                            <span class="badge badge-scheduled">Scheduled</span>
                            <div style="font-size: 11px; color: #d4af37; margin-top: 4px;">{{ $post->published_at->format('M j, Y g:i A') }}</div>
                        @else
                            @php
                                $current = $post->status === 'scheduled' ? 'published' : $post->status;
                            @endphp
                            <form method="POST" action="{{ route('admin.blog.update-status', $post) }}" class="status-form">
                                @csrf @method('PATCH')
                                <select name="status" class="status-select status-select-{{ $current }}" onchange="this.form.submit()">
                                    <option value="draft"     {{ $current === 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="published" {{ $current === 'published' ? 'selected' : '' }}>Published</option>
                                </select>
                            </form>
                        @endif
                    </td>
                    <td>{{ $post->author }}</td>
                    <td style="white-space: nowrap;">{{ $post->created_at->format('M d, Y') }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.blog.edit', $post) }}" class="btn btn-sm btn-edit">Edit</a>
                            <form action="{{ route('admin.blog.destroy', $post) }}" method="POST" class="delete-form" onsubmit="return confirm('Delete this post?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">
                        <div class="empty-state">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                            <h3>No blog posts yet</h3>
                            <p>Create your first blog post to get started.</p>
                            <a href="{{ route('admin.blog.create') }}" class="btn btn-gold">Create Post</a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($posts->hasPages())
    <div class="pagination-wrapper">
        {{ $posts->links('vendor.pagination.admin') }}
    </div>
    @endif
</div>
@endsection
