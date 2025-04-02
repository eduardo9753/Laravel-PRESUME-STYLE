<?php

namespace App\Http\Controllers\user\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function __invoke()
    {
        return view('user.contact.index');
    }
}
