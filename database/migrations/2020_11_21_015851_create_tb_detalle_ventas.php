<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbDetalleVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detalle_ventas', function (Blueprint $table) {
            $table->bigIncrements('id_detalle_venta');
            $table->float('precio_unitario');
            $table->integer('cantidad');
            $table->integer('id_venta');
            $table->integer('id_producto');
            $table->integer('id_usuario');
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
        Schema::dropIfExists('tb_detalle_ventas');
    }
}
