<?php

namespace App\Models;

class Category extends \TCG\Voyager\Models\Category
{
    public function posts()
    {
        return $this->hasMany(
            Post::class,
            'category_id'
        );
    }
}