<?php

namespace App\Http\Controllers\admin\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Categorycontroller extends Controller
{
    //
    public function __construct()
    {
        
    }

    public function index()
    {
        return view('admin.category.index');
    }
}
