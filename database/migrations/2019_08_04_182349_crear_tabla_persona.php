<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('p_nombre');
            $table->string('s_nombre');
            $table->string('p_apellido');
            $table->string('s_apellido');
            $table->unsignedInteger('id_t_identificacion');
            $table->foreign('id_t_identificacion','fk_persona_tidentificacion')->references('id')->on('t_identificacion')->onDelete('restrict')->onUpdate('restrict');
            $table->string('numero_identificacion',30)->unique();
            $table->string('email',45)->unique();
            $table->unsignedInteger('id_descripcion');
            $table->foreign('id_descripcion','fk_persona_direccion')->references('id')->on('direccion')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_telefono');
            $table->foreign('id_telefono','fk_persona_telefono')->references('id')->on('telefono')->onDelete('restrict')->onUpdate('restrict');


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
        Schema::dropIfExists('persona');
    }
}
