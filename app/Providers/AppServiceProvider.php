<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Page;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
public function boot(): void
{
    View::composer('*', function ($view) {

        $view->with('categories',
            Category::orderBy('order')->get());

        $view->with('pages',
            Page::where('status','ACTIVE')->get());

    });
}
}
