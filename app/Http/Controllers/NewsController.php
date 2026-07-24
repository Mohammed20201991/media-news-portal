<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;

class NewsController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug', $slug)
                    ->where('status', 'PUBLISHED')
                    ->firstOrFail();

        $related = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->latest()
            ->take(4)
            ->get();

        $previous = Post::where('id', '<', $post->id)
            ->latest('id')
            ->first();

        $next = Post::where('id', '>', $post->id)
            ->oldest('id')
            ->first();

        return view('news.show', compact(
            'post',
            'related',
            'previous',
            'next'
        ));
    }
}