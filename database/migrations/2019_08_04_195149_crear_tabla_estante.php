<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEstante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estante', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('estante',45);
            $table->unsignedInteger('id_categoria');
            $table->foreign('id_categoria','fk_estante_categoria')->references('id')->on('categoria')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_ubicacion');
            $table->foreign('id_ubicacion','fk_estante_ubicacion')->references('id')->on('ubicacion')->onDelete('restrict')->onUpdate('restrict');

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
        Schema::dropIfExists('estante');
    }
}
