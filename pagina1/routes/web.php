<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contacto', [HomeController::class, 'contact']);
Route::get('/nosotros_url', [HomeController::class, 'nosotros']);
Route::get('/blog_url', [HomeController::class, 'blogPagina']);
//name significa el nombre de toda la ruta
Route::get('/formulario_url2', [HomeController::class, 'formularioPagina'])->name("form_url");
//Modulo login
Route::get('/admin/acceso', [LoginController::class, 'acceso'])->name("login");
Route::get('/admin/registri', [LoginController::class, 'registro'])->name("register");


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/Home', function () {
//     return view('');
// });
