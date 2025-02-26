<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function acceso()
    {
       return view('auth.access');
    }
    public function registro()
    {
       return view('auth.registro');
    }
}
