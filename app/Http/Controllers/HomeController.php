<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // Hero
        $featured = Post::where('status','PUBLISHED')
                        ->latest()
                        ->take(5)
                        ->get();

        // Latest News
        $latest = Post::where('status','PUBLISHED')
                      ->latest()
                      ->paginate(9);

        // Category Sections
        $sections = Category::with(['posts' => function($q){
            $q->take(4);
        }])->get();

        return view('home', compact(
            'featured',
            'latest',
            'sections'
        ));
    }
}