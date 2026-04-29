<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['key', 'label', 'items'];

    protected $casts = [
        'items' => 'array',
    ];

    /**
     * Convenience: return the items array for a given key, or [] if missing.
     * Templates use this so a missing menu degrades gracefully instead of crashing.
     */
    public static function itemsFor(string $key): array
    {
        $row = static::where('key', $key)->first();
        return $row?->items ?? [];
    }
}
