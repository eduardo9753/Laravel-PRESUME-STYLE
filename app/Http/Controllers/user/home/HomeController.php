<?php

namespace App\Http\Controllers\user\home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke()
    {
        $products = Product::all();
        return view('user.home.index', [
            'products' => $products
        ]);
    }
}
