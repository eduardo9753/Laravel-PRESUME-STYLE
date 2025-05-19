<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'purchase_price',
        'sale_price',
        'status',
        'user_id',
        'subcategory_id',
        'brand_id'
    ];

    //me retorna la subcategoria del producto
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    //me retorna la marca del producto
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    //me retorna el usuario a quien le pertenece el producto
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //me retorna las imagenes del producto
    public function images()
    {
        return $this->HasMany(ProductImage::class);
    }

    //me retorna las variantes del producto //el color , el stock 
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }


    /*
      ✔ Un Product pertenece a una Category y a una Brand (belongsTo).
      ✔ Un Product tiene muchas ProductImage y ProductVariant (hasMany).
      ✔ Cada ProductImage y ProductVariant pertenece a un Product (belongsTo).
    */
}
