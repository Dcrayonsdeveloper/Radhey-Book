<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::published()
            ->latest('published_at')
            ->paginate(9);

        return view('blog.index', [
            'meta_title' => 'Betting Blog | Cricket, Casino & Sports Betting Tips - Radhey Book',
            'meta_description' => 'Read the latest betting tips, strategies, and guides from Radhey Book.',
            'meta_keywords' => 'betting blog, cricket betting tips, casino guides, betting strategies',
            'posts' => $posts,
        ]);
    }

    public function show(string $slug)
    {
        $post = BlogPost::published()->where('slug', $slug)->firstOrFail();

        $relatedPosts = BlogPost::published()
            ->where('category', $post->category)
            ->where('id', '!=', $post->id)
            ->latest('published_at')
            ->take(3)
            ->get();

        if ($relatedPosts->count() < 3) {
            $additional = BlogPost::published()
                ->where('id', '!=', $post->id)
                ->whereNotIn('id', $relatedPosts->pluck('id'))
                ->latest('published_at')
                ->take(3 - $relatedPosts->count())
                ->get();
            $relatedPosts = $relatedPosts->merge($additional);
        }

        return view('blog.show', [
            'meta_title' => $post->meta_title ?? $post->title . ' | Radhey Book Blog',
            'meta_description' => $post->meta_description ?? $post->excerpt,
            'meta_keywords' => $post->meta_keywords ?? '',
            'noindex' => $post->noindex,
            'canonicalUrl' => $post->canonical_url,
            'post' => $post,
            'relatedPosts' => $relatedPosts,
        ]);
    }
}
