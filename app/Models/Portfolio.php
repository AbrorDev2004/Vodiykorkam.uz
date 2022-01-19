<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'location',
        'date',
        'arxitektor',
        'maydon',
        'image',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keyword',

    ];

}
