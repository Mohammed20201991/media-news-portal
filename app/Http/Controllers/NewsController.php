<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;

class NewsController extends Controller
{
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)
                    ->where('status', 'PUBLISHED')
                    ->firstOrFail();

        return view('news.show', compact('post'));
    }
}