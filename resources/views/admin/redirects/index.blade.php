@extends('admin.layouts.app')
@section('title', 'Redirects')

@section('content')
<div class="page-header">
    <p style="color:#b8b8b8;font-size:14px;margin:0;">Map old URLs to new ones with a permanent (301) or temporary (302) redirect. Disabling a row turns the redirect off without deleting it.</p>
    <a href="{{ route('admin.redirects.create') }}" class="btn btn-gold">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        New Redirect
    </a>
</div>

<div class="panel">
    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>From</th>
                    <th>→</th>
                    <th>To</th>
                    <th>Code</th>
                    <th>Status</th>
                    <th>Hits</th>
                    <th>Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($redirects as $r)
                <tr>
                    <td style="font-family: monospace; color:#fff;">{{ $r->from_path }}</td>
                    <td style="color:#d4af37;">→</td>
                    <td style="font-family: monospace; color:#b8b8b8;">{{ $r->to_path }}</td>
                    <td><span class="badge badge-gold">{{ $r->status_code }}</span></td>
                    <td>
                        <form method="POST" action="{{ route('admin.redirects.toggle', $r) }}" style="display:inline;">
                            @csrf @method('PATCH')
                            <button type="submit" class="badge badge-{{ $r->is_active ? 'published' : 'draft' }}" style="border:none;cursor:pointer;font-family:inherit;">
                                {{ $r->is_active ? 'Active' : 'Disabled' }}
                            </button>
                        </form>
                    </td>
                    <td style="font-size:13px;color:#b8b8b8;">{{ number_format($r->hits) }}</td>
                    <td style="white-space:nowrap;font-size:13px;color:#b8b8b8;">{{ $r->updated_at->diffForHumans() }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.redirects.edit', $r) }}" class="btn btn-sm btn-edit">Edit</a>
                            <form action="{{ route('admin.redirects.destroy', $r) }}" method="POST" onsubmit="return confirm('Delete this redirect?')" style="display:inline;">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8">
                        <div class="empty-state">
                            <h3>No redirects yet</h3>
                            <p>Click <strong>New Redirect</strong> above to add one.</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($redirects->hasPages())
    <div class="pagination-wrapper">{{ $redirects->links('vendor.pagination.admin') }}</div>
    @endif
</div>
@endsection
