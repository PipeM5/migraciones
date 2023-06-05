<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FacultadesSeeder extends Seeder
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
                'cod_facultad'=>'10',
                'nom_facultad'=>'Artes'
            ],


            [
                'cod_facultad'=>'20',
                'nom_facultad'=>'Contables'
            ],

                 [
                'cod_facultad'=>'30',
                'nom_facultad'=>'Ingeniería'
                 ],


            [
                'cod_facultad'=>'40',
                'nom_facultad'=>'Ciencias Exactas'
            ],

                 [
                'cod_facultad'=>'50',
                'nom_facultad'=>'Medicina'
                 ]


          
                 ];

                 DB::table('facultades')->insert($datos);
    }
}
