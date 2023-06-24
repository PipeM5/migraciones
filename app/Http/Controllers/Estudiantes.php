<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Estudiante;

class Estudiantes extends Controller
{
    

    public function index(){
        $estudiantes= DB::table('estudiantes')->get();
        return view ('estudiantes.listado',['estudiantes'=>$estudiantes]);

    }

    public function form_registro(){
       
        return view ('estudiantes.form_registro');

    }

    public function registrar(Request $r){
        $estudiante = new Estudiante();
        $estudiante->cod_estudiante = $r->input('codigoEstudiante');
        $estudiante->nom_estudiante = $r->input('nombreEstudiante');
        $estudiante->edad_estudiante = $r->input('edadEstudiante');
        $estudiante->fech_estudiante = $r->input('fechaEstudiante');
        $estudiante->sex_estudiante = $r->input('sexoEstudiante');
        $estudiante->ciudad = $r->input('ciudadEstudiante');
        $estudiante->barrio = $r->input('barrioEstudiante');
        $estudiante->programa = $r->input('programaEstudiante');                  
        $estudiante->save();
        return redirect()->route('listadoEst');
    }
    public function eliminar($id){
       
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return redirect()->route('listadoEst');
    }
}