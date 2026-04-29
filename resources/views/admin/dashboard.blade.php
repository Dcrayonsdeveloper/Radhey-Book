@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon gold">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        </div>
        <div class="stat-value">{{ number_format($totalPages) }}</div>
        <div class="stat-label">Pages</div>
    </div>
    <div class="stat-card">
        <div class="stat-icon blue">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
        </div>
        <div class="stat-value">{{ $totalPosts }}</div>
        <div class="stat-label">Blog Posts</div>
        <span class="stat-change neutral">{{ $publishedPosts }} published</span>
    </div>
    <div class="stat-card">
        <div class="stat-icon green">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4-4v2"/><circle cx="9" cy="7" r="4"/></svg>
        </div>
        <div class="stat-value">{{ number_format($totalUsers) }}</div>
        <div class="stat-label">Admin Users</div>
    </div>
</div>

<div class="dashboard-grid" style="margin-top: 24px;">
    <div class="panel">
        <div class="panel-header">
            <h3 class="panel-title">Recent Posts</h3>
            <a href="{{ route('admin.blog.create') }}" class="btn btn-sm btn-gold">+ New Post</a>
        </div>
        <div class="panel-body">
            @forelse($recentPosts as $post)
            <div style="padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.04);">
                <a href="{{ route('admin.blog.edit', $post) }}" style="color: #fff; text-decoration: none; font-size: 14px; font-weight: 500;">{{ Str::limit($post->title, 40) }}</a>
                <div style="display: flex; gap: 8px; margin-top: 4px;">
                    <span class="badge badge-{{ $post->status === 'published' ? 'published' : 'draft' }}">{{ ucfirst($post->status) }}</span>
                    <span style="font-size: 12px; color: #b0b0b0;">{{ $post->created_at->format('M d, Y') }}</span>
                </div>
            </div>
            @empty
            <div class="empty-state" style="padding: 30px;">
                <p>No blog posts yet.</p>
                <a href="{{ route('admin.blog.create') }}" class="btn btn-sm btn-gold">Create First Post</a>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
