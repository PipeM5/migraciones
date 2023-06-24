<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ProfesoresSeeder extends Seeder
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
                'cod_profesor'=>'81',
                'nom_profesor'=>'Marcela',
                'cat_profesor'=>'Tópicos',
                
            ],


            [
                'cod_profesor'=>'82',
                'nom_profesor'=>'Franklin',
                'cat_profesor'=>'Modelos',
                
            ],

                 [
                'cod_profesor'=>'83',
                'nom_profesor'=>'Silvio',
                'cat_profesor'=>'Base Datos',
                

                 ],


            [
                'cod_profesor'=>'85',
                'nom_profesor'=>'Edgar',
                'cat_profesor'=>'Redes',
                
            ],

                 [
                'cod_barrio'=>'86',
                'nom_profesor'=>'Luis',
                'cat_profesor'=>'Inglés',
                

                 ]


          
                 ];

                 DB::table('profesores')->insert($datos);
    }
}
