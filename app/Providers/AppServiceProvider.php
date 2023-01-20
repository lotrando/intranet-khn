<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Navitem;

use function GuzzleHttp\Promise\all;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        $categories = Category::with('documents')->get();           // Categories items
        View::share('categories', $categories);

        $navitems = Navitem::with('category')->get();               // Navigation items
        View::share('navitems', $navitems);
    }
}
