<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Redirect;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index()
    {
        $redirects = Redirect::orderByDesc('updated_at')->paginate(30);
        return view('admin.redirects.index', compact('redirects'));
    }

    public function create()
    {
        $redirect = new Redirect(['status_code' => 301, 'is_active' => true]);
        return view('admin.redirects.form', compact('redirect'));
    }

    public function store(Request $request)
    {
        $validated = $this->validated($request);
        $validated['is_active'] = $request->boolean('is_active');
        Redirect::create($validated);
        return redirect()->route('admin.redirects.index')->with('success', 'Redirect added.');
    }

    public function edit(Redirect $redirect)
    {
        return view('admin.redirects.form', compact('redirect'));
    }

    public function update(Request $request, Redirect $redirect)
    {
        $validated = $this->validated($request, $redirect->id);
        $validated['is_active'] = $request->boolean('is_active');
        $redirect->update($validated);
        return redirect()->route('admin.redirects.index')->with('success', 'Redirect updated.');
    }

    public function destroy(Redirect $redirect)
    {
        $redirect->delete();
        return redirect()->route('admin.redirects.index')->with('success', 'Redirect removed.');
    }

    public function toggle(Redirect $redirect)
    {
        $redirect->update(['is_active' => !$redirect->is_active]);
        return redirect()->route('admin.redirects.index')
            ->with('success', $redirect->is_active ? 'Redirect activated.' : 'Redirect deactivated.');
    }

    private function validated(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'from_path'   => [
                'required', 'string', 'max:500', 'regex:/^\/.*/',
                'unique:redirects,from_path' . ($ignoreId ? ",{$ignoreId}" : ''),
            ],
            'to_path'     => ['required', 'string', 'max:500'],
            'status_code' => ['required', 'integer', 'in:301,302,307,308'],
        ], [
            'from_path.regex'  => 'From path must start with /.',
            'from_path.unique' => 'A redirect from this path already exists.',
        ]);
    }
}
