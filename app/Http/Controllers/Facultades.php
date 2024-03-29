<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Facultad;
class Facultades extends Controller
{
    public function index(){
        $facultades= DB::table('facultades')->get();
        return view ('facultades.listado',['facultades'=>$facultades]);

    }

    public function form_registro(){
       
        return view ('facultades.form_registro');

    }

    public function registrar(Request $r){
        $facultad = new Facultad();
        $facultad->cod_facultad = $r->input('codigoFacultad');
        $facultad->nom_facultad = $r->input('nombreFacultad');
        $facultad->save();
        return redirect()->route('listadoFac');
    }

    public function editar_registro($id){
        $facultad = Facultad::findOrFail($id);
        return view('facultades.editar', ['facultad' => $facultad]);
    }
    public function editar(Request $r,$id){
        $facultad = Facultad::findOrFail($id);
        $facultad->cod_facultad = $r->input('codigoFacultad');
        $facultad->nom_facultad = $r->input('nombreFacultad');
        $facultad->save();

        return redirect()->route('listadoFac');
    }
   

    public function eliminar($id){
       
        $facultad = Facultad::findOrFail($id);
        $facultad->delete();
        return redirect()->route('listadoFac');
    }
}
