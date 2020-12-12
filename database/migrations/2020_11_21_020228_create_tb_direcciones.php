<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbDirecciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_direcciones', function (Blueprint $table) {
            $table->bigIncrements('id_direccion');
            $table->string('calle');
            $table->integer('numero_interior');
            $table->integer('numero_exterior');
            $table->integer('id_usuario');
            $table->integer('id_municipio');
            $table->integer('id_estado');
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
        Schema::dropIfExists('tb_direcciones');
    }
}
