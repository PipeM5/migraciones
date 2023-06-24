<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Programa;

class Programas extends Controller
{
   
   

    public function index(){
        $programas= DB::table('programas')->get();
        return view ('programas.listado',['programas'=>$programas]);

    }

    public function form_registro(){
       
        return view ('programas.form_registro');

    }

    public function registrar(Request $r){
        $programa = new Programa();
        $programa->cod_programa = $r->input('codigoPrograma');
        $programa->nom_programa = $r->input('nombrePrograma');
        $programa->facultad = $r->input('facultad');
        $programa->save();
        return redirect()->route('listadoPro');
    }


    public function eliminar($id){
       
        $programa = Programa::findOrFail($id);
        $programa->delete();
        return redirect()->route('listadoPro');
    }
}