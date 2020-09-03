<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo_isbn');
            $table->string('titulo');
            $table->bigInteger('edito_id')->unsigned();
            $table->bigInteger('pa_id')->unsigned();
            $table->bigInteger('tipolib_id')->unsigned();          
            $table->dateTime('fecha_lanzamiento');
            $table->string('edicion');
            $table->timestamps();
            $table->foreign('edito_id')->references('id')->on('editorial');
            $table->foreign('pa_id')->references('id')->on('_pais');
            $table->foreign('tipolib_id')->references('id')->on('tipodelibros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
