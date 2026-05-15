<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\RedirectController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;

// Homepage
Route::get('/', [PageController::class, 'home'])->name('home');

// Static pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms-and-conditions', [PageController::class, 'terms'])->name('terms');
Route::get('/responsible-gaming', [PageController::class, 'responsibleGaming'])->name('responsible-gaming');


// Sport category pages
Route::get('/cricket', [PageController::class, 'cricket'])->name('cricket');
Route::get('/cricket-betting-id', [PageController::class, 'cricketBettingId'])->name('cricket-betting-id');
Route::get('/casino', [PageController::class, 'casino'])->name('casino');
Route::get('/tennis-betting-id', [PageController::class, 'tennis'])->name('tennis');
Route::get('/football-betting-id', [PageController::class, 'football'])->name('football');
Route::get('/aviator', [PageController::class, 'aviator'])->name('aviator');

// Exchange platform pages
// Renamed from /lord-exchange — old URL is 301-redirected via the redirects table.
Route::get('/lords-exchange', [PageController::class, 'lordExchange'])->name('lords-exchange');
Route::get('/lotus-exchange', [PageController::class, 'lotusExchange'])->name('lotus-exchange');
Route::get('/fairplay-369', [PageController::class, 'fairplay'])->name('fairplay');
Route::get('/sky-exchange', [PageController::class, 'skyExchange'])->name('sky-exchange');
Route::get('/online-betting-id', [PageController::class, 'onlineBettingId'])->name('online-betting-id');
Route::get('/ipl-betting-id', [PageController::class, 'iplBettingId'])->name('ipl-betting-id');
Route::get('/t20-betting-id', [PageController::class, 't20BettingId'])->name('t20-betting-id');
Route::get('/mahadev-book-id', [PageController::class, 'mahadevBookId'])->name('mahadev-book-id');
Route::get('/whatsapp-betting-id', [PageController::class, 'whatsappBettingId'])->name('whatsapp-betting-id');
Route::get('/online-football-betting-id', [PageController::class, 'onlineFootballBettingId'])->name('online-football-betting-id');
Route::get('/reddy-anna-book-id', [PageController::class, 'reddyAnnaBookId'])->name('reddy-anna-book-id');
Route::get('/lords-exchange-id', [PageController::class, 'lordsExchangeId'])->name('lords-exchange-id');
Route::get('/casino-betting-id', [PageController::class, 'casinoBettingId'])->name('casino-betting-id');
Route::get('/lotus-exchange-id', [PageController::class, 'lotusExchangeId'])->name('lotus-exchange-id');
Route::get('/online-casino-id', [PageController::class, 'onlineCasinoId'])->name('online-casino-id');
Route::get('/best-ipl-betting-id-providers', [PageController::class, 'bestIplBettingIdProviders'])->name('best-ipl-betting-id-providers');
Route::get('/sky-exchange-id', [PageController::class, 'skyExchangeId'])->name('sky-exchange-id');
Route::get('/t20-cricket-betting-id', [PageController::class, 't20CricketBettingId'])->name('t20-cricket-betting-id');
Route::get('/fairplay-exchange-id', [PageController::class, 'fairplayExchangeId'])->name('fairplay-exchange-id');
Route::get('/how-to-get-ipl-betting-id', [PageController::class, 'howToGetIplBettingId'])->name('how-to-get-ipl-betting-id');
Route::get('/what-is-ipl-betting-id', [PageController::class, 'whatIsIplBettingId'])->name('what-is-ipl-betting-id');
Route::get('/tennis-betting', [PageController::class, 'tennisBetting'])->name('tennis-betting');
Route::get('/football-betting', [PageController::class, 'footballBetting'])->name('football-betting');

// Competitor pages
Route::get('/reddy-anna', [PageController::class, 'reddyAnna'])->name('reddy-anna');
Route::get('/mahadev-book', [PageController::class, 'mahadevBook'])->name('mahadev-book');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');


// Sitemap
Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');

// Contact form (rate limited)
Route::post('/contact', [ContactController::class, 'store'])->middleware('throttle:5,1')->name('contact.store');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1')->name('login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        // Page management
        Route::get('/pages', [AdminPageController::class, 'index'])->name('pages.index');
        Route::get('/pages/{page}/edit', [AdminPageController::class, 'edit'])->name('pages.edit');
        Route::put('/pages/{page}', [AdminPageController::class, 'update'])->name('pages.update');

        // Blog management
        Route::get('/blog', [AdminBlogController::class, 'index'])->name('blog.index');
        Route::get('/blog/create', [AdminBlogController::class, 'create'])->name('blog.create');
        Route::post('/blog', [AdminBlogController::class, 'store'])->name('blog.store');
        Route::get('/blog/{blog}/edit', [AdminBlogController::class, 'edit'])->name('blog.edit');
        Route::put('/blog/{blog}', [AdminBlogController::class, 'update'])->name('blog.update');
        Route::patch('/blog/{blog}/status', [AdminBlogController::class, 'updateStatus'])->name('blog.update-status');
        Route::delete('/blog/{blog}', [AdminBlogController::class, 'destroy'])->name('blog.destroy');

        // Menu management (header_main, footer_quick_links)
        Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
        Route::get('/menus/{menu}/edit', [MenuController::class, 'edit'])->name('menus.edit');
        Route::put('/menus/{menu}', [MenuController::class, 'update'])->name('menus.update');

        // URL redirects
        Route::get('/redirects', [RedirectController::class, 'index'])->name('redirects.index');
        Route::get('/redirects/create', [RedirectController::class, 'create'])->name('redirects.create');
        Route::post('/redirects', [RedirectController::class, 'store'])->name('redirects.store');
        Route::get('/redirects/{redirect}/edit', [RedirectController::class, 'edit'])->name('redirects.edit');
        Route::put('/redirects/{redirect}', [RedirectController::class, 'update'])->name('redirects.update');
        Route::patch('/redirects/{redirect}/toggle', [RedirectController::class, 'toggle'])->name('redirects.toggle');
        Route::delete('/redirects/{redirect}', [RedirectController::class, 'destroy'])->name('redirects.destroy');

        // Admin users
        Route::resource('users', UserController::class)->except(['show']);

        // Settings
        Route::get('/settings', [SettingController::class, 'index'])->name('settings');
        Route::post('/settings', [SettingController::class, 'update'])->name('settings.update');
        Route::post('/settings/password', [SettingController::class, 'changePassword'])->name('settings.password');
    });
});
