<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class BarriosSeeder extends Seeder
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
                'cod_barrio'=>'100',
                'nom_barrio'=>'Miraflores',
                'est_barrio'=>'2',
                'comuna'=>'1'
            ],


            [
                'cod_barrio'=>'101',
                'nom_barrio'=>'Berlín',
                'est_barrio'=>'3',
                'comuna'=>'2'
            ],

                 [
                'cod_barrio'=>'102',
                'nom_barrio'=>'El Vergel',
                'est_barrio'=>'5',
                'comuna'=>'3'

                 ],


            [
                'cod_barrio'=>'103',
                'nom_barrio'=>'Los Cedros',
                'est_barrio'=>'5',
                'comuna'=>'4'
            ],

                 [
                'cod_barrio'=>'105',
                'nom_barrio'=>'El Bosque',
                'est_barrio'=>'3',
                'comuna'=>'5'

                 ]


          
                 ];

                 DB::table('barrios')->insert($datos);
    }
}
