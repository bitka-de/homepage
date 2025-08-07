<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'cover_image',
        'tags',
        'published_at',
        'user_id',
    ];

    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
    ];
}
