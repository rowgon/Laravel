<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomecontrollerController;
use App\Http\Controllers\PostcontrollerController;

Route::get('/Lorem', function () {
    return view('home');
});

Route::get('/', [PostcontrollerController::class, 'index']);
Route::get('/crear', [PostcontrollerController::class, 'create']);
Route::get('/mostrar', [PostcontrollerController::class, 'show']);

Route::get('/envio/{id}', [PostcontrollerController::class, 'send']);


/*Route::get('/', function () {
    
});*/

Route::get('/contacto', function () {
    return view('Contact.contact');
});