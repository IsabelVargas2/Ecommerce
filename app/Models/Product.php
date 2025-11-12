<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "Products";
    protected $fillable = [
        'name', 
        'price', 
        'description', 
        'category_id', 
        'brand_id',
        'image_url',
    ];
    public $timestamps = true;
}
