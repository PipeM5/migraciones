<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class EstudiantesSeeder extends Seeder
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
                'cod_estudiante'=>'0001',
                'nom_estudiante'=>'Felipe',
                'edad_estudiante'=>'20',
                'fech_estudiante'=>'2003-05-07',
                'sex_estudiante'=>'M',
                'ciudad'=>'12349', 
                'barrio'=>'100',
                'programa'=>'53'     
            ],


            [
                'cod_estudiante'=>'0002',
                'nom_estudiante'=>'Jairo',
                'edad_estudiante'=>'22',
                'fech_estudiante'=>'2001-08-22',
                'sex_estudiante'=>'M',
                'ciudad'=>'12348', 
                'barrio'=>'101',
                'programa'=>'52'   
            ],

                 [
                'cod_estudiante'=>'0003',
                'nom_estudiante'=>'Marcela',
                'edad_estudiante'=>'25',
                'fech_estudiante'=>'1999-05-17',
                'sex_estudiante'=>'F',
                'ciudad'=>'12347', 
                'barrio'=>'102',
                'programa'=>'51'   
                 ],


            [
                'cod_estudiante'=>'0004',
                'nom_estudiante'=>'María',
                'edad_estudiante'=>'23',
                'fech_estudiante'=>'2000-02-05',
                'sex_estudiante'=>'F',
                'ciudad'=>'12346',
                'barrio'=>'103',
                'programa'=>'50' 
            ],

                 [
                'cod_estudiante'=>'0005',
                'nom_estudiante'=>'Israel',
                'edad_estudiante'=>'21',
                'fech_estudiante'=>'2002-03-16',
                'sex_estudiante'=>'M',
                'ciudad'=>'12345',
                'barrio'=>'105',
                'programa'=>'55' 
                 ]


          
                 ];

                 DB::table('estudiantes')->insert($datos);
    }
}
