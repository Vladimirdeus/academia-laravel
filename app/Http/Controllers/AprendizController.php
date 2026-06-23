<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AprendizController extends Controller
{
    public function saludo(){
        return "Hola, soy un aprendiz de Laravel";

    }
    public function index(){
        $titulo = "Bienvenidos a mi academia de Laravel";
        return view('index', ['titulo' => $titulo]);
    }
    public function listadoProductos(){
        $productos = ["Producto 1", "Producto 2", "Producto 3"];
        return view('productos.index', ['productos' => $productos]);
    }
}