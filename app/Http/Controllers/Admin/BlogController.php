<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mews\Purifier\Facades\Purifier;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest()->paginate(15);
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'content' => 'required',
            'category' => 'required|max:100',
            'status' => 'required|in:draft,published,scheduled',
            'scheduled_at' => 'required_if:status,scheduled|nullable|date|after:now',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable|max:500',
            'meta_keywords' => 'nullable|max:255',
            'canonical_url' => 'nullable|url|max:500',
            'image_file' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
        ]);

        $validated['content'] = Purifier::clean($validated['content'] ?? '', 'page-content');
        $validated['excerpt'] = Purifier::clean($validated['excerpt'] ?? '', 'page-content');

        $validated['noindex'] = $request->boolean('noindex');
        $validated['author'] = auth()->user()->name;

        // Slug source: last path segment of the canonical URL if provided, else the title.
        $slugSource = $this->slugFromCanonical($validated['canonical_url'] ?? null) ?: $validated['title'];
        $validated['slug'] = Str::slug($slugSource);

        $validated['published_at'] = $this->resolvePublishedAt($validated['status'], $validated['scheduled_at'] ?? null);
        unset($validated['scheduled_at']);

        // Ensure unique slug
        $baseSlug = $validated['slug'];
        $counter = 1;
        while (BlogPost::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = $baseSlug . '-' . $counter++;
        }

        // If user did not enter a canonical URL, default it to the post's own URL.
        if (empty($validated['canonical_url'])) {
            $validated['canonical_url'] = route('blog.show', $validated['slug']);
        }

        if ($request->hasFile('image_file')) {
            $validated['image'] = $this->storeImage($request->file('image_file'), $validated['slug']);
        }
        unset($validated['image_file']);

        BlogPost::create($validated);

        return redirect()->route('admin.blog.index')->with('success', $this->successMessage('created', $validated['status'], $validated['published_at']));
    }

    public function edit(BlogPost $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, BlogPost $blog)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'content' => 'required',
            'category' => 'required|max:100',
            'status' => 'required|in:draft,published,scheduled',
            'scheduled_at' => 'required_if:status,scheduled|nullable|date|after:now',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable|max:500',
            'meta_keywords' => 'nullable|max:255',
            'canonical_url' => 'nullable|url|max:500',
            'image_file' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
        ]);

        $validated['content'] = Purifier::clean($validated['content'] ?? '', 'page-content');
        $validated['excerpt'] = Purifier::clean($validated['excerpt'] ?? '', 'page-content');

        $validated['noindex'] = $request->boolean('noindex');

        // For an existing post that's already published, keep its original published_at
        // when the user just edits content without changing status.
        $keepExisting = $validated['status'] === 'published' && $blog->status === 'published' && $blog->published_at;
        $validated['published_at'] = $keepExisting
            ? $blog->published_at
            : $this->resolvePublishedAt($validated['status'], $validated['scheduled_at'] ?? null);
        unset($validated['scheduled_at']);

        // If canonical URL changed, derive a new slug from its last path segment.
        $newSlug = $this->slugFromCanonical($validated['canonical_url'] ?? null);
        if ($newSlug && $newSlug !== $blog->slug) {
            $slug = Str::slug($newSlug);
            $base = $slug;
            $i = 1;
            while (BlogPost::where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
                $slug = $base . '-' . $i++;
            }
            $validated['slug'] = $slug;
        }

        // If canonical URL is empty, default to the (possibly-updated) post URL.
        if (empty($validated['canonical_url'])) {
            $validated['canonical_url'] = route('blog.show', $validated['slug'] ?? $blog->slug);
        }

        if ($request->hasFile('image_file')) {
            $validated['image'] = $this->storeImage($request->file('image_file'), $validated['slug'] ?? $blog->slug);
        }
        unset($validated['image_file']);

        $blog->update($validated);

        return redirect()->route('admin.blog.index')->with('success', $this->successMessage('updated', $validated['status'], $validated['published_at']));
    }

    private function storeImage(\Illuminate\Http\UploadedFile $file, string $slug): string
    {
        // Stored under uploads/blog/ rather than blog/ so the directory does
        // not shadow the /blog Laravel route (nginx would serve a 403 on /blog/).
        $dir = public_path('uploads/blog');
        if (!is_dir($dir)) mkdir($dir, 0755, true);
        $name = $slug . '-' . time() . '.' . strtolower($file->getClientOriginalExtension());
        $file->move($dir, $name);
        return 'uploads/blog/' . $name;
    }

    /**
     * Extract the slug from a canonical URL's last path segment.
     * Returns null when the URL is empty or has no usable path.
     */
    private function slugFromCanonical(?string $url): ?string
    {
        if (empty($url)) return null;
        $path = parse_url($url, PHP_URL_PATH);
        if (!$path) return null;
        $segment = basename(rtrim($path, '/'));
        return $segment !== '' ? $segment : null;
    }

    public function destroy(BlogPost $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Blog post deleted successfully.');
    }

    /**
     * Inline status toggle from the blog list. Only handles draft <-> published.
     * Switching to "scheduled" requires picking a future datetime, which is only
     * available on the full edit screen.
     */
    public function updateStatus(Request $request, BlogPost $blog)
    {
        $validated = $request->validate([
            'status' => 'required|in:draft,published',
        ]);

        $update = ['status' => $validated['status']];

        if ($validated['status'] === 'published' && !$blog->published_at) {
            $update['published_at'] = now();
        }
        if ($validated['status'] === 'draft') {
            // Keep published_at history? No — simpler to clear so a re-publish gets a fresh date.
            $update['published_at'] = null;
        }

        $blog->update($update);

        return redirect()->route('admin.blog.index')->with('success', "\"{$blog->title}\" is now " . ucfirst($validated['status']) . '.');
    }

    private function resolvePublishedAt(string $status, ?string $scheduledAt)
    {
        return match ($status) {
            'published' => now(),
            'scheduled' => $scheduledAt,   // validator already enforced future datetime
            default     => null,           // draft
        };
    }

    private function successMessage(string $verb, string $status, $publishedAt): string
    {
        if ($status === 'scheduled' && $publishedAt) {
            $when = \Carbon\Carbon::parse($publishedAt)->format('M j, Y \a\t g:i A');
            return "Blog post {$verb} and scheduled to publish on {$when}.";
        }
        return ucfirst($status) . " blog post {$verb} successfully.";
    }
}
