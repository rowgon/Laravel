<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomecontrollerController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
