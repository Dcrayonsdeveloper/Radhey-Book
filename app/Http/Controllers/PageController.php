<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PageController extends Controller
{
    private function renderPage(string $slug, string $view)
    {
        $page = Page::findBySlug($slug);

        if (!$page) {
            abort(404);
        }

        return view($view, [
            'page' => $page,
            'meta_title' => $page->meta_title,
            'meta_description' => $page->meta_description,
            'meta_keywords' => $page->meta_keywords,
            'noindex' => $page->noindex,
            'canonicalUrl' => $page->canonical_url,
        ]);
    }

    public function home() { return $this->renderPage('home', 'pages.home'); }
    public function about() { return $this->renderPage('about', 'pages.about'); }
    public function contact() { return $this->renderPage('contact', 'pages.contact'); }
    public function privacy() { return $this->renderPage('privacy-policy', 'pages.privacy'); }
    public function terms() { return $this->renderPage('terms-and-conditions', 'pages.terms'); }
    public function responsibleGaming() { return $this->renderPage('responsible-gaming', 'pages.responsible-gaming'); }
    public function cricket() { return $this->renderPage('cricket', 'pages.cricket'); }
    public function cricketBettingId() { return $this->renderPage('cricket-betting-id', 'pages.cricket-betting-id'); }
    public function casino() { return $this->renderPage('casino', 'pages.casino'); }
    public function tennis() { return $this->renderPage('tennis-betting-id', 'pages.tennis'); }
    public function football() { return $this->renderPage('football-betting-id', 'pages.football'); }
    public function aviator() { return $this->renderPage('aviator', 'pages.aviator'); }
    public function lordExchange() { return $this->renderPage('lords-exchange', 'pages.lords-exchange'); }
    public function lotusExchange() { return $this->renderPage('lotus-exchange', 'pages.lotus-exchange'); }
    public function fairplay() { return $this->renderPage('fairplay-369', 'pages.fairplay'); }
    public function skyExchange() { return $this->renderPage('sky-exchange', 'pages.sky-exchange'); }
    public function onlineBettingId() { return $this->renderPage('online-betting-id', 'pages.online-betting-id'); }
    public function iplBettingId() { return $this->renderPage('ipl-betting-id', 'pages.ipl-betting-id'); }
    public function t20BettingId() { return $this->renderPage('t20-betting-id', 'pages.t20-betting-id'); }
    public function mahadevBookId() { return $this->renderPage('mahadev-book-id', 'pages.mahadev-book-id'); }
    public function whatsappBettingId() { return $this->renderPage('whatsapp-betting-id', 'pages.whatsapp-betting-id'); }
    public function onlineFootballBettingId() { return $this->renderPage('online-football-betting-id', 'pages.online-football-betting-id'); }
    public function reddyAnnaBookId() { return $this->renderPage('reddy-anna-book-id', 'pages.reddy-anna-book-id'); }
    public function lordsExchangeId() { return $this->renderPage('lords-exchange-id', 'pages.lords-exchange-id'); }
    public function casinoBettingId() { return $this->renderPage('casino-betting-id', 'pages.casino-betting-id'); }
    public function lotusExchangeId() { return $this->renderPage('lotus-exchange-id', 'pages.lotus-exchange-id'); }
    public function onlineCasinoId() { return $this->renderPage('online-casino-id', 'pages.online-casino-id'); }
    public function bestIplBettingIdProviders() { return $this->renderPage('best-ipl-betting-id-providers', 'pages.best-ipl-betting-id-providers'); }
    public function skyExchangeId() { return $this->renderPage('sky-exchange-id', 'pages.sky-exchange-id'); }
    public function t20CricketBettingId() { return $this->renderPage('t20-cricket-betting-id', 'pages.t20-cricket-betting-id'); }
    public function fairplayExchangeId() { return $this->renderPage('fairplay-exchange-id', 'pages.fairplay-exchange-id'); }
    public function howToGetIplBettingId() { return $this->renderPage('how-to-get-ipl-betting-id', 'pages.how-to-get-ipl-betting-id'); }
    public function whatIsIplBettingId() { return $this->renderPage('what-is-ipl-betting-id', 'pages.what-is-ipl-betting-id'); }
    public function tennisBetting() { return $this->renderPage('tennis-betting', 'pages.tennis-betting'); }
    public function footballBetting() { return $this->renderPage('football-betting', 'pages.football-betting'); }
    public function reddyAnna() { return $this->renderPage('reddy-anna', 'pages.reddy-anna'); }
    public function mahadevBook() { return $this->renderPage('mahadev-book', 'pages.mahadev-book'); }

    public function sitemap()
    {
        $urls = [
            ['loc' => url('/'), 'changefreq' => 'daily', 'priority' => '1.0'],
            ['loc' => url('/about'), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['loc' => url('/contact'), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['loc' => url('/privacy-policy'), 'changefreq' => 'yearly', 'priority' => '0.3'],
            ['loc' => url('/terms-and-conditions'), 'changefreq' => 'yearly', 'priority' => '0.3'],
            ['loc' => url('/responsible-gaming'), 'changefreq' => 'yearly', 'priority' => '0.4'],
            ['loc' => url('/cricket'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => url('/cricket-betting-id'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => url('/casino'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => url('/tennis-betting-id'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => url('/football-betting-id'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => url('/aviator'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => url('/lords-exchange'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => url('/lotus-exchange'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => url('/fairplay-369'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => url('/sky-exchange'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => url('/online-betting-id'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => url('/ipl-betting-id'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => url('/t20-betting-id'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => url('/mahadev-book-id'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => url('/whatsapp-betting-id'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => url('/reddy-anna-book-id'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => url('/lords-exchange-id'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => url('/casino-betting-id'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => url('/lotus-exchange-id'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => url('/online-casino-id'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => url('/best-ipl-betting-id-providers'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => url('/sky-exchange-id'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => url('/t20-cricket-betting-id'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => url('/fairplay-exchange-id'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => url('/how-to-get-ipl-betting-id'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => url('/what-is-ipl-betting-id'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => url('/tennis-betting'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => url('/football-betting'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => url('/reddy-anna'), 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => url('/mahadev-book'), 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => url('/blog'), 'changefreq' => 'weekly', 'priority' => '0.8'],
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $url) {
            $xml .= '  <url>' . "\n";
            $xml .= '    <loc>' . $url['loc'] . '</loc>' . "\n";
            $xml .= '    <lastmod>' . now()->toDateString() . '</lastmod>' . "\n";
            $xml .= '    <changefreq>' . $url['changefreq'] . '</changefreq>' . "\n";
            $xml .= '    <priority>' . $url['priority'] . '</priority>' . "\n";
            $xml .= '  </url>' . "\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml',
        ]);
    }
}
