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
        $this->middleware('auth');
        $this->middleware('can:crear imagen');
    }

    public function index(Product $product)
    {
        return view('admin.image.index', [
            'product' => $product
        ]);
    }
}
