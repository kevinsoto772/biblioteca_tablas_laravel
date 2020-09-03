<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroporareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libroporarea', function (Blueprint $table) {
            $table->bigInteger('libro_id')->unsigned();
            $table->bigInteger('area_id')->unsigned();
            $table->timestamps();
            $table->foreign('libro_id')->references('id')->on('libros')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('area')->onDelete('cascade');

            $table->primary(['libro_id','area_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libroporarea');
    }
}
