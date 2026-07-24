<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;

class RSSController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')
            ->where('status', 'PUBLISHED')
            ->latest()
            ->take(50)
            ->get();

        return response()
            ->view('rss.index', compact('posts'))
            ->header('Content-Type', 'application/rss+xml; charset=UTF-8');
    }
}