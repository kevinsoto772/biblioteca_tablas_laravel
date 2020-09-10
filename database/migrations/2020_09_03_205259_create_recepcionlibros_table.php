<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecepcionlibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepcionlibros', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha');
            $table->time('hora');
            $table->bigInteger('proveedor_id')->unsigned();
            $table->bigInteger('lib_id')->unsigned();
            $table->integer('cantidad');
            $table->timestamps();
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
            $table->foreign('lib_id')->references('id')->on('libros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recepcionlibros');
    }
}
