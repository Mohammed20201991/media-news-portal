<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = trim($request->q);

        $posts = Post::published()
            ->when($query, function ($q) use ($query) {

                $q->where(function ($builder) use ($query) {

                    $builder->where('title', 'LIKE', "%{$query}%")
                            ->orWhere('excerpt', 'LIKE', "%{$query}%")
                            ->orWhere('body', 'LIKE', "%{$query}%");

                });

            })
            ->latest()
            ->paginate(9)
            ->withQueryString();

        return view('search.index', compact(
            'posts',
            'query'
        ));
    }
}