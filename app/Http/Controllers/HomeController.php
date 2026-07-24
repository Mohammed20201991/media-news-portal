<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // Featured posts
        $featured = Post::published()
            ->where('featured', 1)
            ->latest()
            ->take(5)
            ->get();

        // Latest News
        $posts = Post::published()
            ->latest()
            ->paginate(9);

        // Categories with their latest posts
        $sections = Category::with([
            'posts' => function ($q) {
                $q->take(6);
            }
        ])
        ->orderBy('order')
        ->get();

        return view('home', compact(
            'featured',
            'posts',
            'sections'
        ));
    }
}