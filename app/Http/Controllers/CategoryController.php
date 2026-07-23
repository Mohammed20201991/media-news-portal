<?php

namespace App\Http\Controllers;

// use TCG\Voyager\Models\Category;
use App\Models\Category;
class CategoryController extends Controller
{
    public function show(string $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $posts = $category->posts()->paginate(9);

        return view('category.show', compact(
            'category',
            'posts'
        ));
    }
}