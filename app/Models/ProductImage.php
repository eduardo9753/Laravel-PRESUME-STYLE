<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
       'image_url',
       'product_id'
    ];

    //me retorna el producto el cual estan asociadas estas imagenes
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
