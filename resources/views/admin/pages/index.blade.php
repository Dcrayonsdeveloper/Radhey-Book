@extends('admin.layouts.app')
@section('title', 'Pages')

@section('content')
<p style="color: #b8b8b8; font-size: 14px; margin-bottom: 24px;">Manage your website pages - edit SEO meta data and page content sections.</p>

<div class="panel">
    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Page Name</th>
                    <th>URL Slug</th>
                    <th>Meta Title</th>
                    <th>Status</th>
                    <th>Last Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pages as $page)
                <tr>
                    <td><strong style="color: #fff;">{{ $page->title }}</strong></td>
                    <td style="font-size: 13px; color: #b8b8b8;">/{{ $page->slug === 'home' ? '' : $page->slug }}</td>
                    <td style="max-width: 250px; font-size: 13px;">{{ Str::limit($page->meta_title, 45) }}</td>
                    <td>
                        <span class="badge {{ $page->is_active ? 'badge-published' : 'badge-draft' }}">
                            {{ $page->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td style="white-space: nowrap; font-size: 13px;">{{ $page->updated_at->format('M d, Y') }}</td>
                    <td>
                        <a href="{{ route('admin.pages.edit', $page) }}" class="btn btn-sm btn-edit">Edit</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">
                        <div class="empty-state">
                            <h3>No pages found</h3>
                            <p>Run the page seeder to populate pages.</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($pages->hasPages())
    <div class="pagination-wrapper">
        {{ $pages->links('vendor.pagination.admin') }}
    </div>
    @endif
</div>
@endsection
