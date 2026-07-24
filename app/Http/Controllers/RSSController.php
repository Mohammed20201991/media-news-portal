<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;

class RSSController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'PUBLISHED')
            ->latest()
            ->take(30)
            ->get();

        return response()
            ->view('rss.index', compact('posts'))
            ->header('Content-Type', 'application/xml');
    }
}