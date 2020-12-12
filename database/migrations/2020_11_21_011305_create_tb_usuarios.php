<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string('nombre',30);
            $table->string('primer_apellido',30);
            $table->string('segundo_apellido',30);
            $table->string('telefono',20)->nullable();
            $table->string('email',50);
            $table->string('pass',100);
            $table->integer('id_tipo_usuario');
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
        Schema::dropIfExists('tb_usuarios');
    }
}
