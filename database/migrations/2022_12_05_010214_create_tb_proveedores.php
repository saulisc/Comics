<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_proveedores', function (Blueprint $table) {
            $table->increments('idProveedor');
            $table -> string('empresa');
            $table -> string('direccion');
            $table -> string('pais');
            $table -> string('contacto');
            $table -> string('noFijo');
            $table -> string('noCelular');
            $table -> string('correo');
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
        Schema::dropIfExists('tb_proveedores');
    }
};
