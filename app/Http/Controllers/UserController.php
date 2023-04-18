<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Municipio;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registro(){
        $estados = Estado::all();
        return view("datos/registro")->with(['estados' => $estados]);
    }

    public function ver_municipios(Request $request){
        $estados_id = $request->get('estados_id');
        // dump($request);
        $municipios = Municipio::where('estados_id', $estados_id)->get();

        return view("datos/ver_municipios")->with(['municipios' => $municipios]);
    }
}
