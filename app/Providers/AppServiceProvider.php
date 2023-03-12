<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;
use App\Models\Navitem;
use App\Models\Category;

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
        // Localize Carbon class
        Carbon::setLocale('cz');

        // Paginator Bootstrap CSS
        Paginator::useBootstrap();

        // Navigation items
        $navitems = Navitem::all();
        View::share('navitems', $navitems);

        // Dokuments items
        $docs = Category::with('documents')->where('category_type', '=', 'dokument')->get();
        View::share('docs', $docs);

        // Standards items
        $stands = Category::with('documents')->where('category_type', '=', 'standard')->get();
        View::share('stands', $stands);

        // BOZP a PO items
        $bozps = Category::with('documents')->where('category_type', '=', 'bozp')->get();
        View::share('bozps', $bozps);

        // Categories items
        $categories = Category::with('documents')->where('id', '>', 12)->get();
        View::share('categories', $categories);
    }
}
