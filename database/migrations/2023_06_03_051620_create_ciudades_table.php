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
        Schema::create('ciudades', function (Blueprint $table) {           
            $table->timestamps();
            $table->char('cod_ciudad', 5);
            $table->char('nom_ciudad', 20);
            $table->char('departamento', 2);
            $table->primary('cod_ciudad');
            $table->foreign('departamento')->references('cod_departamento')->on('departamentos');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudades');
    }
};
