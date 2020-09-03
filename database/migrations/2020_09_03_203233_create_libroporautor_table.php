<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroporautorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libroporautor', function (Blueprint $table) {
            $table->bigInteger('libro_id')->unsigned();
            $table->bigInteger('autor_id')->unsigned();
            $table->timestamps();
            $table->foreign('libro_id')->references('id')->on('libros')->onDelete('cascade');
            $table->foreign('autor_id')->references('id')->on('autor')->onDelete('cascade');

            $table->primary(['libro_id','autor_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libroporautor');
    }
}
