<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('admin.auth.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
