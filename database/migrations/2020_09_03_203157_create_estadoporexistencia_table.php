<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoporexistenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadoporexistencia', function (Blueprint $table) {
            $table->bigInteger('existencia_id')->unsigned();
            $table->bigInteger('estado_id')->unsigned();
            $table->timestamps();
            $table->foreign('existencia_id')->references('id')->on('libroexistencias')->onDelete('cascade');
            $table->foreign('estado_id')->references('id')->on('estado')->onDelete('cascade');

            $table->primary(['existencia_id','estado_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadoporexistencia');
    }
}
