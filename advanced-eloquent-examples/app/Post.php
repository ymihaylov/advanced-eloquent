<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'text', 'is_published',
    ];

    public function scopePublished($query)
    {
        return $this->where('is_published', true);
    }
}