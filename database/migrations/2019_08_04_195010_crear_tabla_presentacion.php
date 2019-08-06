<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPresentacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentacion', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('presentacion',45);
            $table->unsignedInteger('tamanio_unidades');
            $table->unsignedInteger('id_unidades');
            $table->foreign('id_unidades','fk_presentacion_unidades')->references('id')->on('unidades')->onDelete('restrict')->onUpdate('restrict');

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
        Schema::dropIfExists('presentacion');
    }
}
