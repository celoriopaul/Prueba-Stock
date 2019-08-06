<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCiudad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudad', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre',45);
            $table->unsignedInteger('id_pais');
            $table->foreign('id_pais','fk_ciudad_pais')->references('id')->on('pais')->onDelete('restrict')->onUpdate('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudad');
    }
}
