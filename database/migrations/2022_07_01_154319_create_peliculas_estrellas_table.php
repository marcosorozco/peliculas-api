<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasEstrellasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas_estrellas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelicula_id');
            $table->integer('estrellas');
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
        Schema::dropIfExists('peliculas_estrellas');
    }
}
