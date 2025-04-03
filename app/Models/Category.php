<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
       'status'
    ];

    //me retorna todos los productos de esa categoria
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function sizes()
    {
        return $this->hasMany(Size::class);
    }
}
