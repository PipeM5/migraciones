<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profesor;

class Profesores extends Controller
{
   public function index(){
        $profesores= DB::table('profesores')->get();
        return view ('profesores.listado',['profesores'=>$profesores]);

    }

    public function form_registro(){
       
        return view ('profesores.form_registro');

    }

    public function registrar(Request $r){
        $profesor = new Profesor();
        $profesor->cod_profesor = $r->input('codigoProfesor');
        $profesor->nom_profesor = $r->input('nombreProfesor');
        $profesor->cat_profesor = $r->input('catalogoProfesor');
        $profesor->save();
        return redirect()->route('listadoProfe');
    }
    public function eliminar($id){
       
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();
        return redirect()->route('listadoProfe');
    }
}
