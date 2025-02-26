<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('layouts.template');
        }
    public function contact()
    {
        return view('contacto');
        }
    public function nosotros()
    {
        return view('about');
        }
    public function blogPagina()
    {
        return view('blog');
         }
    public function formularioPagina()
     {
        return view('formulario');
        }
}
