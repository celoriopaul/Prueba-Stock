<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEmpleado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedTinyInteger('estado');
            $table->unsignedInteger('id_persona');
            $table->foreign('id_persona','fk_empleado_persona')->references('id')->on('persona')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario','fk_empleado_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            
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
        Schema::dropIfExists('empleado');
    }
}
