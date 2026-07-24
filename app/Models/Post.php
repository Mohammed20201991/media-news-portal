<?php

namespace App\Models;

class Post extends \TCG\Voyager\Models\Post
{
    public function category()
    {
        return $this->belongsTo(
            Category::class,
            'category_id'
        );
    }
}
