<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable=['title', 'description', 'body', 'image', 'meta_title', 'meta_description', 'meta_keywords'];
}
