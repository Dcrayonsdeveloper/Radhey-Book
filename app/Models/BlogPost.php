<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'title', 'slug', 'excerpt', 'content', 'image',
        'author', 'category', 'status', 'meta_title',
        'meta_description', 'meta_keywords', 'noindex',
        'canonical_url', 'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'noindex' => 'boolean',
    ];

    /**
     * Public-facing posts. Includes:
     *   - status = 'published' (immediate)
     *   - status = 'scheduled' AND published_at <= now() (auto-go-live; no cron needed)
     */
    public function scopePublished($query)
    {
        return $query->where(function ($q) {
            $q->where(function ($qq) {
                $qq->where('status', 'published')->whereNotNull('published_at');
            })->orWhere(function ($qq) {
                $qq->where('status', 'scheduled')
                   ->whereNotNull('published_at')
                   ->where('published_at', '<=', now());
            });
        });
    }

    public function isScheduledForFuture(): bool
    {
        return $this->status === 'scheduled'
            && $this->published_at
            && $this->published_at->isFuture();
    }
}
