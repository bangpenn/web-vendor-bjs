<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = 'products';

    // one to one
    public function product_detail()
    {
        return $this->hasOne(ProductDetail::class, 'products_id', 'id');
    }

    // many to one
    public function categories()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }

}


