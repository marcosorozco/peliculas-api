<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas_comentarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelicula_id');
            $table->text('comentario');
            $table->date('fecha');
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
        Schema::dropIfExists('peliculas_comentarios');
    }
}
