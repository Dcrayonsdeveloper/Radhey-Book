<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Poll;
use App\Models\SiteSetting;
use App\Support\Keywords;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Reset per-request keyword auto-link tracking so static state never
        // leaks between requests under long-running runtimes (Octane/Swoole).
        Keywords::resetRequestState();

        // Force every generated URL to use HTTPS in production. Stops accidental
        // mixed-content loads and ensures secure cookies are honoured.
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        if (Schema::hasTable('site_settings')) {
            $settings = SiteSetting::pluck('value', 'key')->toArray();
            View::share('siteSettings', $settings);
        } else {
            View::share('siteSettings', []);
        }

        // Make navigation menus available in the header/footer partials without
        // every controller having to pass them.
        if (Schema::hasTable('menus')) {
            View::share('headerMenu',      Menu::itemsFor('header_main'));
            View::share('footerQuickLinks', Menu::itemsFor('footer_quick_links'));
        } else {
            View::share('headerMenu', []);
            View::share('footerQuickLinks', []);
        }

        // Share the currently-active poll with the public layout only (admin
        // pages don't render the popup, so no need to run the query there).
        if (Schema::hasTable('polls')) {
            View::composer('layouts.app', function ($view) {
                $view->with('activePoll', Poll::active()->with('options')->first());
            });
        }

        // @kw($html) — wrap known keywords in <strong> tags.
        // Output is HTML, so pass through {!! !!} or use it directly as a directive.
        Blade::directive('kw', function ($expression) {
            return "<?php echo \\App\\Support\\Keywords::bold($expression); ?>";
        });
    }
}
