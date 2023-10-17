<?php

namespace App\Providers;

use App\Models\Page;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (\Schema::hasTable('pages')) {
            $pages = Page::all();

            if ($pages->count()) {
                $navitems = collect();

                foreach ($pages as $page) {
                    $navitems->push($page);
                }

                View::share('navitems', $navitems);
            }
        }
    }
}
