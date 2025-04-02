<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'color_id',
        'size_id',
        'stock',
        'product_id'
    ];

    //me retorna el producto en funcionn de la variante
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    //me retorna el color de la variante del producto
    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    //me retorna el tamaño de la variante del producto
    public function size()
    {
        return $this->belongsTo(Size::class);
    }
}
