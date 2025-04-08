<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'purchase_price',
        "sale_price",
        "discount",
        "date_today",
        "revenue",
        "user_id"
    ];

    //me retorna el usuario a quien le pertenece el producto
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
