<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'body',
        'status',
        'image',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

}
