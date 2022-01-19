<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product_category;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'body',
        'image',
        'category_id',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    public function category(){
        return $this->belongsTo(Product_category::class, 'category_id');
    }

}
