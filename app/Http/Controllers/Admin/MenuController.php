<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::orderBy('label')->get();
        return view('admin.menus.index', compact('menus'));
    }

    public function edit(Menu $menu)
    {
        return view('admin.menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        // Items arrive as a JSON blob from the front-end editor. We parse, sanitise,
        // and re-encode into the JSON column. Storing as a single field keeps the
        // admin form simple and matches the project's existing JSON-in-DB style.
        $payload = $request->input('items_json', '[]');
        $items   = json_decode($payload, true);

        if (!is_array($items)) {
            return redirect()->route('admin.menus.edit', $menu)
                ->with('error', 'Could not parse menu items. Please try again.');
        }

        $menu->update([
            'items' => $this->sanitise($items),
        ]);

        return redirect()->route('admin.menus.edit', $menu)
            ->with('success', 'Menu updated successfully.');
    }

    /**
     * Trim values, drop empty rows, enforce 2 levels (children of children are dropped),
     * and pin every target to a known value so we never write garbage into the DB.
     */
    private function sanitise(array $items): array
    {
        $clean = [];
        foreach ($items as $item) {
            $label  = trim((string) ($item['label']  ?? ''));
            $url    = $this->safeUrl((string) ($item['url'] ?? ''));
            $target = ($item['target'] ?? '_self') === '_blank' ? '_blank' : '_self';

            if ($label === '') {
                continue;
            }

            $children = [];
            foreach ((array) ($item['children'] ?? []) as $child) {
                $cLabel  = trim((string) ($child['label']  ?? ''));
                $cUrl    = $this->safeUrl((string) ($child['url'] ?? ''));
                $cTarget = ($child['target'] ?? '_self') === '_blank' ? '_blank' : '_self';
                if ($cLabel === '') {
                    continue;
                }
                $children[] = ['label' => $cLabel, 'url' => $cUrl, 'target' => $cTarget];
            }

            $clean[] = [
                'label'    => $label,
                'url'      => $url,
                'target'   => $target,
                'children' => $children,
            ];
        }
        return $clean;
    }

    /**
     * Allow only safe URL schemes. Reject `javascript:`, `data:`, `vbscript:`, etc.
     * Empty / unsafe URLs collapse to '#' so the menu still renders without becoming a XSS vector.
     */
    private function safeUrl(string $url): string
    {
        $url = trim($url);
        if ($url === '') {
            return '#';
        }
        // Allowed: relative paths starting with /, anchors, http(s)://, mailto:, tel:.
        if (preg_match('#^(/|\#|https?://|mailto:|tel:)#i', $url)) {
            return $url;
        }
        // Anything else (javascript:, data:, vbscript:, file:, etc.) is dropped.
        return '#';
    }
}
