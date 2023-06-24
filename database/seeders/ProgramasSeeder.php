<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ProgramasSeeder extends Seeder
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
                'cod_programa'=>'50',
                'nom_programa'=>'Ingeniería de Sistemas',
                'facultad'=>'30'      
            ],


            [
                'cod_programa'=>'51',
                'nom_programa'=>'Contabilidad',
                'facultad'=>'20'   
            ],

                 [
                'cod_programa'=>'52',
                'nom_programa'=>'Medicina',
                'facultad'=>'50'   
                 ],


            [
                'cod_programa'=>'53',
                'nom_programa'=>'Matemáticas',
                'facultad'=>'40'
            ],

                 [
                'cod_programa'=>'55',
                'nom_programa'=>'Arquitectura',
                'facultad'=>'10'
                 ]


          
                 ];

                 DB::table('programas')->insert($datos);
    }
}
