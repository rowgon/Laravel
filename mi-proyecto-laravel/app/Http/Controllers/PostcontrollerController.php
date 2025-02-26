<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostcontrollerController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function create()
    {
        return "Hola mundo2";
    }
    public function show()
    {
        return "Hola mundo3";
    }
    public function send(Request $request)
    {
        return "Hola mu"." ".$request->id;
    }
}
