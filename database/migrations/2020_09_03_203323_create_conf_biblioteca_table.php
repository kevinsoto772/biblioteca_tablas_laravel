<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfBibliotecaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conf_biblioteca', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('NIT');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('logo');
            $table->Integer('Numero_recibo');
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
        Schema::dropIfExists('conf_biblioteca');
    }
}
