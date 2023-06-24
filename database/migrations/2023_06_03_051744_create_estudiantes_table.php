<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {            
            $table->timestamps();
            $table->char('cod_estudiante', 4);
            $table->char('nom_estudiante', 30);
            $table->smallInteger('edad_estudiante');
            $table->date('fech_estudiante');
            $table->char('sex_estudiante', 1);
            $table->char('ciudad', 5);
            $table->char('barrio', 3);           
            $table->char('programa', 2);
            $table->foreign('ciudad')->references('cod_ciudad')->on('ciudades');
            $table->foreign('barrio')->references('cod_barrio')->on('barrios');
            $table->foreign('programa')->references('cod_programa')->on('programas');
            $table->primary('cod_estudiante'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
