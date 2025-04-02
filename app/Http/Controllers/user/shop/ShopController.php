<?php

namespace App\Http\Controllers\user\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function __construct() {}

    public function index()
    {
        $products = Product::all();
        $colors = Color::all();
        $categories = Category::all();
        $sizes = Size::all();
        return view('user.shop.index', [
            'products' => $products,
            'colors' => $colors,
            'categories' => $categories,
            'sizes' => $sizes
        ]);
    }

    //para ver el producto por id
    public function show(Product $product)
    {
        $products = Product::all();
        return view('user.shop.show', [
            'product' => $product,
            'products' => $products
        ]);
    }
}
