<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)
                    ->where('status', 'ACTIVE')
                    ->firstOrFail();

        return view('pages.show', compact('page'));
    }
}