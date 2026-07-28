<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\QueriesController;
use Illuminate\Support\Facades\Route;


Route::get("/test",function(){
    return "Api";
});

Route::get("/saludo", [BackendController::class,"get"]);
Route::get("/obtener/{id?}", [BackendController::class,"get"]);
Route::get("/obtenerTodos",[BackendController::class,"getAll"]);
Route::post("/crear",[BackendController::class,"create"]);
Route::put("/actualizar/{id}",[BackendController::class,"update"]);

Route::get('/query', [QueriesController::class, "get"]);
Route::get('/queryById/{id}',[QueriesController::class,"getId"]);

