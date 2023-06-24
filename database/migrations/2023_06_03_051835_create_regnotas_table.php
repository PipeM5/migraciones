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
        Schema::create('regnotas', function (Blueprint $table) {
            $table->timestamps();
            $table->char('estudiante', 4);
            $table->char('materia', 2);           
            $table->char('profesor', 2);
           
            $table->float('parcial_1');
            $table->float('parcial_2');
            $table->float('e_final');
            $table->float('n_final');
            $table->char('estado', 1);  
            $table->foreign('estudiante')->references('cod_estudiante')->on('estudiantes');
            $table->foreign('materia')->references('cod_materia')->on('materias');
            $table->foreign('profesor')->references('cod_profesor')->on('profesores');
            
            $table->primary(['estudiante','materia','profesor']);
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regnotas');
    }
};
