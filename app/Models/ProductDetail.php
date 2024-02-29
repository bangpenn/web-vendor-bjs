<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    public $table = 'product_detail';

    // many to one
    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
