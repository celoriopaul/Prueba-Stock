<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDireccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('calle',45);
            $table->string('ciudad',45);
            $table->string('sector',45);
            $table->string('bloque',45);
            $table->string('direccion',45);
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
        Schema::dropIfExists('direccion');
    }
}
