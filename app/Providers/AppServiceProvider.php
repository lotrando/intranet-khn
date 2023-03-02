<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Navitem;

use Carbon\Carbon;
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

        Carbon::setLocale('cz');

        Paginator::useBootstrap();

        $docs = Category::with('documents')->where('category_type', '=', 'dokument')->get();                // Dokuments items
        View::share('docs', $docs);

        $stands = Category::with('documents')->where('category_type', '=', 'standard')->get();              // Standards items
        View::share('stands', $stands);

        $bozps = Category::with('documents')->where('category_type', '=', 'bozp')->get();                   // Bozps items
        View::share('bozps', $bozps);

        $categories = Category::with('documents')->where('id', '>', 12)->get();                             // Categories items
        View::share('categories', $categories);

        $navitems = Navitem::with('category')->get();                                                       // Navigation items
        View::share('navitems', $navitems);
    }
}
