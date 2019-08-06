<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaFactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_producto');
            $table->foreign('id_producto','fk_factura_producto')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');
            $table->date('fecha');
            $table->string('descripcion',45);
            $table->string('cantidad',45);
            $table->unsignedInteger('precio');
            $table->unsignedInteger('total');
            $table->unsignedInteger('id_tpago');
            $table->foreign('id_tpago','fk_factura_tpago')->references('id')->on('t_pago')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_empleado');
            $table->foreign('id_empleado','fk_factura_empleado')->references('id')->on('empleado')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('factura');
    }
}
