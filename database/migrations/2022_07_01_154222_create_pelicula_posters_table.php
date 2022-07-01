<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculaPostersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula_posters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelicula_id');
            $table->string('path');
            $table->integer('tipo');
            $table->timestamps();

            $table->foreign('pelicula_id')
                ->references('id')
                ->on('peliculas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelicula_posters');
    }
}
