<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculaGenerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula_generos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelicula_id');
            $table->foreignId('genero_id');
            $table->timestamps();

            $table->foreign('pelicula_id')
                ->references('id')
                ->on('peliculas');

            $table->foreign('genero_id')
                ->references('id')
                ->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelicula_generos');
    }
}
