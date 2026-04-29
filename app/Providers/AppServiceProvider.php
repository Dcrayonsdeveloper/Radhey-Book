<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\SiteSetting;
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

        // @kw($html) — wrap known keywords in <strong> tags.
        // Output is HTML, so pass through {!! !!} or use it directly as a directive.
        Blade::directive('kw', function ($expression) {
            return "<?php echo \\App\\Support\\Keywords::bold($expression); ?>";
        });
    }
}
