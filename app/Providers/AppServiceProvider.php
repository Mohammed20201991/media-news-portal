<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Menu;

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

        $view->with('frontendMenu',
            Menu::where('name', 'frontend')
            ->with('items.children')
            ->first()
    );

    });
}
}
