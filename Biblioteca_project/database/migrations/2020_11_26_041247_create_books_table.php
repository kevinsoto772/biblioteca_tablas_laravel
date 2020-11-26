<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('ISBN');
            $table->string('Titulo');
            $table->text('descripcion');
            $table->string('fecha_lanzamiento');
            $table->string('Idioma');
            $table->string('Edicion');
            $table->unsignedInteger('autor_id');
            $table->foreign('autor_id')->references('id')->on('autor');
            $table->unsignedInteger('editorial_id');
            $table->foreign('editorial_id')->references('id')->on('editorial');
            $table->string('slug');
            $table->string('picture');
            $table->unsignedInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estado');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
