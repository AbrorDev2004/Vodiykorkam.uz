<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'icon',
        'body',
        'image',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];
}
