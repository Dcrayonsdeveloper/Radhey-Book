<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Poll;
use App\Models\PollOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PollController extends Controller
{
    public function index()
    {
        $polls = Poll::with('options')->orderByDesc('is_active')->orderByDesc('id')->get();
        return view('admin.polls.index', compact('polls'));
    }

    public function create()
    {
        return view('admin.polls.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validatePollRequest($request);

        DB::transaction(function () use ($validated, $request) {
            // Only one poll can be active at a time
            if (!empty($validated['is_active'])) {
                Poll::where('is_active', true)->update(['is_active' => false]);
            }

            $poll = Poll::create([
                'question'     => $validated['question'],
                'redirect_url' => $validated['redirect_url'] ?: 'https://linktr.ee/radheybook',
                'is_active'    => !empty($validated['is_active']),
            ]);

            $this->saveOptions($poll, $request->input('options', []));
        });

        return redirect()->route('admin.polls.index')->with('success', 'Poll created.');
    }

    public function edit(Poll $poll)
    {
        $poll->load('options');
        return view('admin.polls.edit', compact('poll'));
    }

    public function update(Request $request, Poll $poll)
    {
        $validated = $this->validatePollRequest($request);

        DB::transaction(function () use ($validated, $request, $poll) {
            if (!empty($validated['is_active'])) {
                Poll::where('is_active', true)
                    ->where('id', '!=', $poll->id)
                    ->update(['is_active' => false]);
            }

            $poll->update([
                'question'     => $validated['question'],
                'redirect_url' => $validated['redirect_url'] ?: 'https://linktr.ee/radheybook',
                'is_active'    => !empty($validated['is_active']),
            ]);

            $this->saveOptions($poll, $request->input('options', []));
        });

        return redirect()->route('admin.polls.index')->with('success', 'Poll updated.');
    }

    public function destroy(Poll $poll)
    {
        $poll->delete();
        return redirect()->route('admin.polls.index')->with('success', 'Poll deleted.');
    }

    public function activate(Poll $poll)
    {
        DB::transaction(function () use ($poll) {
            Poll::where('is_active', true)->update(['is_active' => false]);
            $poll->update(['is_active' => true]);
        });
        return redirect()->route('admin.polls.index')->with('success', "Activated: {$poll->question}");
    }

    public function deactivate(Poll $poll)
    {
        $poll->update(['is_active' => false]);
        return redirect()->route('admin.polls.index')->with('success', 'Poll deactivated.');
    }

    public function resetVotes(Poll $poll)
    {
        $poll->options()->update(['votes' => 0]);
        return back()->with('success', 'Vote counts reset to zero.');
    }

    // ------------------------------------------------------------------

    private function validatePollRequest(Request $request): array
    {
        return $request->validate([
            'question'      => 'required|string|max:500',
            'redirect_url'  => 'nullable|url|max:500',
            'is_active'     => 'nullable|boolean',
            'options'       => 'required|array|min:2|max:8',
            'options.*.id'    => 'nullable|integer',
            'options.*.label' => 'required|string|max:200',
        ], [
            'options.min'           => 'A poll must have at least 2 options.',
            'options.max'           => 'A poll can have at most 8 options.',
            'options.*.label.required' => 'Every option needs a label.',
        ]);
    }

    /**
     * Sync option rows: preserve existing votes when the row already exists,
     * create new ones for items without an id, and delete options that were
     * removed in the form. Sort order follows submission order.
     */
    private function saveOptions(Poll $poll, array $rawOptions): void
    {
        $existing = $poll->options()->get()->keyBy('id');
        $keepIds  = [];

        foreach (array_values($rawOptions) as $i => $opt) {
            $label = trim($opt['label'] ?? '');
            if ($label === '') {
                continue;
            }
            $id = isset($opt['id']) ? (int) $opt['id'] : 0;

            if ($id && $existing->has($id)) {
                $row = $existing->get($id);
                $row->label = $label;
                $row->sort_order = $i;
                $row->save();
                $keepIds[] = $id;
            } else {
                $row = PollOption::create([
                    'poll_id'    => $poll->id,
                    'label'      => $label,
                    'votes'      => 0,
                    'sort_order' => $i,
                ]);
                $keepIds[] = $row->id;
            }
        }

        // Delete options that were removed in the form
        $poll->options()->whereNotIn('id', $keepIds ?: [0])->delete();
    }
}
