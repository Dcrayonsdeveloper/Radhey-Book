<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use App\Models\PollOption;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PollVoteController extends Controller
{
    /**
     * Record a vote and return updated percentages. The option must belong to
     * the poll and the poll must currently be active.
     *
     * Returns:
     *   { ok: true, redirect_url: "...", options: [{id, label, votes, percent}, ...], total: N }
     */
    public function store(Request $request, Poll $poll, PollOption $option): JsonResponse
    {
        if (!$poll->is_active) {
            return response()->json(['ok' => false, 'error' => 'Poll is no longer active.'], 410);
        }
        if ($option->poll_id !== $poll->id) {
            return response()->json(['ok' => false, 'error' => 'Option does not belong to this poll.'], 422);
        }

        // Atomic increment — safe under concurrent votes
        PollOption::whereKey($option->id)->increment('votes');

        $poll->load('options');
        $total = (int) $poll->options->sum('votes');

        $options = $poll->options->map(function ($opt) use ($total) {
            return [
                'id'      => $opt->id,
                'label'   => $opt->label,
                'votes'   => (int) $opt->votes,
                'percent' => $total > 0 ? round(($opt->votes / $total) * 100) : 0,
            ];
        })->values();

        return response()->json([
            'ok'           => true,
            'redirect_url' => $poll->redirect_url ?: 'https://linktr.ee/radheybook',
            'options'      => $options,
            'total'        => $total,
        ]);
    }
}
