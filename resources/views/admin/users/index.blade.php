@extends('admin.layouts.app')
@section('title', 'Admin Users')

@section('content')
<div class="panel">
    <div class="panel-header">
        <h3 class="panel-title">Admin Users</h3>
        <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-gold">+ New User</a>
    </div>
    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $masterEmail = config('auth.master_admin.email'); @endphp
                @forelse($users as $user)
                @php $isMaster = $masterEmail && strtolower($user->email) === strtolower($masterEmail); @endphp
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }} @if($isMaster) <span class="badge badge-gold">Master</span> @endif</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('M d, Y') }}</td>
                    <td>
                        <div style="display: flex; gap: 8px;">
                            @if($isMaster)
                            <span style="color:#888;font-size:13px;">Locked</span>
                            @else
                            <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-outline">Edit</a>
                            @if($user->id !== auth()->id())
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" onsubmit="return confirm('Delete this user?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                            @else
                            <span class="badge badge-gold">You</span>
                            @endif
                            @endif
                        </div>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="no-data">No admin users found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($users->hasPages())
    <div class="pagination-wrapper">{{ $users->links('vendor.pagination.admin') }}</div>
    @endif
</div>
@endsection
