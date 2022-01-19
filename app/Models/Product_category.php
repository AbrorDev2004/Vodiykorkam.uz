<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Product;

class Product_category extends Model
{
    use HasFactory;
 
    protected $fillable=[
    'name', 
    'slug',
    'meta_title',
    'meta_description',
    'meta_keywords'];

    public function product(){
        return $this->hasMany(Product::class);
    }
} 
