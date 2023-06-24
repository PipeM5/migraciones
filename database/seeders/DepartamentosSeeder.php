<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos =[
            [
                'cod_departamento'=>'31',
                'nom_departamento'=>'Nariño'
            ],


            [
                'cod_departamento'=>'32',
                'nom_departamento'=>'Cauca'
            ],

                 [
                'cod_departamento'=>'33',
                'nom_departamento'=>'Huila'
                 ],


            [
                'cod_departamento'=>'35',
                'nom_departamento'=>'Cundinamarca'
            ],

                 [
                'cod_departamento'=>'36',
                'nom_departamento'=>'Arauca'
                 ]


          
                 ];

                 DB::table('departamentos')->insert($datos);
    }
}
