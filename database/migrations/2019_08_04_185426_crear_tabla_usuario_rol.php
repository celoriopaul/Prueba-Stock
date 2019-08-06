<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarioRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('estado');
            $table->unsignedInteger('id_rol');
            $table->foreign('id_rol','fk_usuariorol_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario','fk_usuariorol_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('usuario_rol');
    }
}
