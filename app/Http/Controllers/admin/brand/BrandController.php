<?php

namespace App\Http\Controllers\admin\brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function __construct()
    {
        
    }

    public function index()
    {
        return view('admin.brand.index');
    }
}
