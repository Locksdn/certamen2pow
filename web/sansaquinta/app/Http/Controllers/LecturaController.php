<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lectura;

class LecturaController extends Controller
{
    public function getLecturas(){
        $lecturas = Lectura::all();
        return $lecturas;
    }

    public function crearLectura(Request $request){
        $input = $request->all();

        $lectura = new Lectura();
        $lectura->fecha         = $input["fecha"];
        $lectura->hora          = $input["hora"];
        $lectura->medidor       = $input["medidor"];
        $lectura->direccion     = $input["direccion"];
        $lectura->valor         = $input["valor"];
        $lectura->tipo_medida   = $input["tipo_medida"];

        $lectura->save();
        return $lectura;
    }

    public function eliminarLectura(Request $request){
        $input = $request->all();
        $id = $input["id"];

        $lectura = Lectura::findOrFail($id);
        $lectura->delete();

        return "Eliminado";
    }
}
