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
        Schema::create('barrios', function (Blueprint $table) {           
            $table->timestamps();
            $table->char('cod_barrio', 3);
            $table->char('nom_barrio', 30);
            $table->smallInteger('est_barrio');
            $table->smallinteger('comuna');
            $table->primary('cod_barrio');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barrios');
    }
};
