@extends('admin.layouts.app')
@section('title', 'Edit Poll')

@section('content')
<div class="panel">
    <div class="panel-header">
        <h3 class="panel-title">Edit Poll</h3>
        <a href="{{ route('admin.polls.index') }}" class="btn btn-sm btn-outline">&larr; All Polls</a>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.polls.update', $poll) }}">
            @csrf @method('PUT')
            @include('admin.polls._form', ['poll' => $poll])
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script>
<script src="{{ asset('js/admin-polls.js') }}?v={{ filemtime(public_path('js/admin-polls.js')) }}"></script>
@endsection
