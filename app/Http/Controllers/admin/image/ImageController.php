<?php

namespace App\Http\Controllers\admin\image;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function __construct()
    {
        
    }

    public function index(Product $product)
    {
        return view('admin.image.index', [
            'product' => $product
        ]);
    }
}
