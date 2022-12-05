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
        Schema::create('table_productos', function (Blueprint $table) {
            $table->increments('idProducto');
            $table -> string('tipo');
            $table -> string('marca');
            $table -> string('descripcion');
            $table -> string('cantidad');
            $table -> string('precioCompra');
            $table -> string('precioVenta');
            $table -> string('fecha');
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
        Schema::dropIfExists('table_productos');
    }
};
