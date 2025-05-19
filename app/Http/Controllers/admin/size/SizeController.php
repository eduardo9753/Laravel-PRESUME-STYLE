<?php

namespace App\Http\Controllers\admin\size;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('can:crear marca');
    }

    public function index()
    {
        return view('admin.size.index');
    }
}
