<?php

use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;

/*
|--------------------------------------------------------------------------
| Rutas Web
|--------------------------------------------------------------------------
|
| Aquí se registran todas las rutas de tu aplicación. Estas rutas serán
| cargadas por el RouteServiceProvider dentro del grupo que contiene
| el middleware "web". ¡Empieza a construir algo increíble!
|
*/

Route::get('/', [StaticPageController::class, 'home'])->name('home');
Route::get('/about', [StaticPageController::class, 'about'])->name('about');
Route::get('/services', [StaticPageController::class, 'services'])->name('services');
Route::get('/contact', [StaticPageController::class, 'contact'])->name('contact');
Route::post('/contact', [StaticPageController::class, 'handleContact']);

//este es otra ruta con otro controlador
Route::get('/empresa', [EmpresaController::class, 'DataEmpresa'])->name('dataempresa');
