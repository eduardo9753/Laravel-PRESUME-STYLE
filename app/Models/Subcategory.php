<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id'];

    // Una subcategoría pertenece a una categoría (Ej: "Polos" pertenece a "Parte superior")
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Una subcategoría tiene muchas tallas (Ej: "Polos" tiene tallas S, M, L...)
    public function sizes()
    {
        return $this->hasMany(Size::class);
    }
}
