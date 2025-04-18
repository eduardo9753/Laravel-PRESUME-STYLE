<?php

namespace App\Http\Controllers\admin\brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:crear marca');
    }

    public function index()
    {
        return view('admin.brand.index');
    }
}
