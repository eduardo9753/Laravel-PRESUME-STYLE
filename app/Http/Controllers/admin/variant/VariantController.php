<?php

namespace App\Http\Controllers\admin\variant;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Product $product)
    {
        return view('admin.variant.index', [
            'product' => $product
        ]);
    }
}
