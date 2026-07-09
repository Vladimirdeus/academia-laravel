<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AprendizController;

Route::get('/', function () {
    return view('home');
});
Route::get('/inicio', [AprendizController::class, 'index']);
Route::get('/productos', [AprendizController::class, 'listadoProductos']);
Route::get('/aprendiz', function () {
    return "Yo voy a aprender Laravel";
});

Route::get( '/saludo', [AprendizController::class, 'saludo'] );

Route::get('/variable/{valor?}', [AprendizController::class,'variable'] );
