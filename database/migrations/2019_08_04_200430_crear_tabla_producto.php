<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('producto',45);
            $table->unsignedBigInteger('cantidad_minima');
            $table->string('componentes',45);
            $table->string('controlado',45);
            $table->string('existencia',45);

            $table->unsignedInteger('id_ISV');
            $table->foreign('id_ISV','fk_producto_ISV')->references('id')->on('ISV')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_descuento');
            $table->foreign('id_descuento','fk_producto_descuento')->references('id')->on('descuento')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_presentacion');
            $table->foreign('id_presentacion','fk_producto_presentacion')->references('id')->on('presentacion')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_componente');
            $table->foreign('id_componente','fk_producto_componente')->references('id')->on('componente')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_estante');
            $table->foreign('id_ISV','fk_producto_estante')->references('id')->on('estante')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_existencia');
            $table->foreign('id_existencia','fk_producto_existencia')->references('id')->on('existencia')->onDelete('restrict')->onUpdate('restrict');












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
        Schema::dropIfExists('producto');
    }
}
