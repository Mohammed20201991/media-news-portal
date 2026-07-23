<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Page;

class HomeController extends Controller
{
public function index()
    {
        $featured = Post::where('status','PUBLISHED')
                        ->where('featured',1)
                        ->latest()
                        ->take(5)
                        ->get();

        $posts = Post::where('status','PUBLISHED')
                    ->latest()
                    ->paginate(9);

        return view('home', compact('featured','posts'));
    }
}