<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $featured = Post::latest()->take(5)->get();

        $posts = Post::latest()->paginate(10);

        return view('home', compact('featured','posts'));
    }
}