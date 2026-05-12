<?php

namespace App\Http\Middleware;

use App\Models\Redirect as RedirectModel;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\HttpFoundation\Response;

class HandleRedirects
{
    public function handle(Request $request, Closure $next): Response
    {
        // Only check GET / HEAD — never redirect POSTs, would break form submits.
        if (!in_array($request->method(), ['GET', 'HEAD'], true)) {
            return $next($request);
        }

        // Skip admin and API routes entirely — they should never match user redirects.
        $path = '/' . ltrim($request->path(), '/');
        if (str_starts_with($path, '/admin') || str_starts_with($path, '/api')) {
            return $next($request);
        }

        // Safety: if the table hasn't been created yet (fresh checkout before migrate),
        // skip rather than blow up every request.
        if (!Schema::hasTable('redirects')) {
            return $next($request);
        }

        $row = RedirectModel::query()
            ->where('is_active', true)
            ->where('from_path', $path)
            ->first();

        if (!$row) {
            return $next($request);
        }

        // Fire-and-forget hit counter; never let it block the redirect.
        try {
            DB::table('redirects')->where('id', $row->id)->update(['hits' => $row->hits + 1]);
        } catch (\Throwable $e) {
            // ignore
        }

        $target = $row->to_path;
        // Preserve querystring on the redirect so analytics & utm tags survive.
        if ($request->getQueryString()) {
            $target .= (str_contains($target, '?') ? '&' : '?') . $request->getQueryString();
        }

        return redirect()->to($target, $row->status_code ?: 301);
    }
}
