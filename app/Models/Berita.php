<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = "beritas";

    protected $fillable = [
        'title',
        'author',
        'description',
        'content',
        'url',
        'url_image',
        'published_at',
        'category'
    ];
}
