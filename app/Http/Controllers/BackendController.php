<?php

Namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    private $persons = [1 => ['nombre' => 'vladimir', "edad" => 25],
        2 => ['nombre' => 'Vania', "edad" => 20]];

    public function get(int $id = 0)
    {
        if(isset($this->persons[$id])){
            return response()->json([ $this->persons[$id]
            ]);
        }else{
            return response()->json(["success" => false, "messedad" => "No se encontro"],Response::HTTP_NOT_FOUND);
        }
    }
    public function getAll (){
        return response()->json($this->persons);
    }
    public function create(Request $datos){
        $person = [
            "id" => count($this->persons) +1,
            "nombre" => $datos->input("nombre", "SOFIA"),
            "edad" => $datos->input("edad", 24)

        ];
       $this->persons[$person["id"]] = $person;

        return response()->json(["success" => true, "data" => $this->persons], Response::HTTP_CREATED);
    }
    public function update(Request $datos, $id){
        if(isset($this->persons[$id])){
            $nombre = $datos->input("nombre",$this->persons[$id]["nombre"]);
            $edad = $datos->input("edad", $this->persons[$id]["edad"]);

            $this->persons[$id]["nombre"] = $nombre;
            $this->persons[$id]["edad"] = $edad;

            return response()->json(["success" => true, "data" => $this->persons], Response::HTTP_ACCEPTED);



        }
        return response()->json(["success" => false, "messedad" => "Error, no se encontro"], Response::HTTP_NOT_FOUND);
    }
    public function delete(int $id){
        if(isset($this->persons[$id])){
            unset($this->persons[$id]);
            response()->json(["status"=>true,"message"=>"Eliminado correctamente"]);

        }
        response()->json(["status"=>false,"message"=>"No se pudo eliminar"],Response::HTTP_NOT_FOUND);
    }

}
