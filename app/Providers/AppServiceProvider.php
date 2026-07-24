<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
public function boot()
{
    View::composer('*', function ($view) {

        $view->with('categories',
            Category::orderBy('order')->get());

        $view->with('breakingPosts',
            Post::where('status','PUBLISHED')
                ->where('featured',1)
                ->latest()
                ->take(5)
                ->get());

        $view->with('latestPosts',
            Post::where('status','PUBLISHED')
                ->latest()
                ->take(6)
                ->get());


        // Dynamic frontend menu
            $view->with(
                'frontendMenu',
                Menu::with('items.children')
                    ->where('name','frontend')
                    ->first()
            );

    });
}

}
