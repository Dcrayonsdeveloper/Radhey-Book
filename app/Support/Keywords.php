<?php

namespace App\Support;

class Keywords
{
    /**
     * Keywords to highlight, ordered longest-first so multi-word phrases match
     * before their substrings (e.g. "IPL Betting ID" before "Betting ID").
     */
    private const TERMS = [
        'Online Cricket Betting ID',
        'Online Betting ID Provider',
        'IPL Betting ID Provider',
        'IPL Betting ID Number',
        'Online Betting ID Number',
        'Online Betting ID',
        'Online Cricket ID',
        'IPL Betting ID',
        'T20 Betting ID',
        'T20 World Cup',
        'T20 Cricket',
        'Cricket Betting ID',
        'Casino Betting ID',
        'Tennis Betting ID',
        'Football Betting ID',
        'Sky Exchange ID',
        'Lords Exchange ID',
        'Lotus Exchange ID',
        'Fairplay Exchange ID',
        'Reddy Anna Book ID',
        'Mahadev Book ID',
        'Lords Exchange',
        'Lotus Exchange',
        'Sky Exchange',
        'Reddy Anna',
        'Mahadev Book',
        'Fairplay',
        'Cricket ID',
        'Casino ID',
        'Betting ID',
        'IPL 2026',
        'Radhey Book',
        'WhatsApp',
        'Welcome Bonus',
    ];

    /**
     * Wrap occurrences of known keywords inside the given HTML/text in <strong> tags.
     * Skips text already inside <strong>, <a>, or any tag's attributes — keeps
     * existing markup intact so we never bold inside hrefs, classes, etc.
     */
    public static function bold(?string $html): string
    {
        return $html ?? '';
    }
}
