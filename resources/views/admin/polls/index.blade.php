@extends('admin.layouts.app')
@section('title', 'Polls')

@section('content')
<div class="page-header">
    <p style="color:#b8b8b8;font-size:14px;margin:0;">Polls shown as a popup on every public page. Only the <strong>active</strong> poll is displayed to visitors.</p>
    <a href="{{ route('admin.polls.create') }}" class="btn btn-sm btn-gold">+ New Poll</a>
</div>

@if(session('success'))
    <div class="alert alert-success" style="margin-bottom: 16px;">{{ session('success') }}</div>
@endif

<div class="panel">
    <div class="panel-body" style="padding: 0;">
        @if($polls->isEmpty())
            <div style="padding: 40px; text-align: center; color: rgba(255,255,255,0.5);">
                No polls yet. Click <strong>+ New Poll</strong> to create your first one.
            </div>
        @else
        <table class="data-table">
            <thead>
                <tr>
                    <th style="width: 60px;">Status</th>
                    <th>Question</th>
                    <th style="width: 100px; text-align: right;">Options</th>
                    <th style="width: 120px; text-align: right;">Total votes</th>
                    <th style="width: 280px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($polls as $poll)
                <tr>
                    <td>
                        @if ($poll->is_active)
                            <span class="badge badge-success">● Active</span>
                        @else
                            <span class="badge" style="background:rgba(255,255,255,0.06);color:#999;">○ Off</span>
                        @endif
                    </td>
                    <td>
                        <strong>{{ $poll->question }}</strong>
                        @if($poll->redirect_url)
                            <div style="color: rgba(255,255,255,0.4); font-size: 12px; margin-top: 4px;">
                                redirects to: {{ $poll->redirect_url }}
                            </div>
                        @endif
                    </td>
                    <td style="text-align: right;">{{ $poll->options->count() }}</td>
                    <td style="text-align: right;"><strong>{{ $poll->totalVotes() }}</strong></td>
                    <td>
                        <div style="display:flex; gap:6px; flex-wrap:wrap;">
                            <a href="{{ route('admin.polls.edit', $poll) }}" class="btn btn-sm btn-outline">Edit</a>
                            @if ($poll->is_active)
                                <form method="POST" action="{{ route('admin.polls.deactivate', $poll) }}" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline" title="Stop showing the popup">Deactivate</button>
                                </form>
                            @else
                                <form method="POST" action="{{ route('admin.polls.activate', $poll) }}" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-gold" title="Show this poll on the public site">Activate</button>
                                </form>
                            @endif
                            <form method="POST" action="{{ route('admin.polls.reset-votes', $poll) }}" style="display:inline;" onsubmit="return confirm('Reset all vote counts to 0?');">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline">Reset votes</button>
                            </form>
                            <form method="POST" action="{{ route('admin.polls.destroy', $poll) }}" style="display:inline;" onsubmit="return confirm('Delete this poll permanently? Votes will be lost.');">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline" style="color:#f87171; border-color:rgba(248,113,113,0.3);">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection
