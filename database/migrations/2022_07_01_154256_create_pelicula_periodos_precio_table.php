<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculaPeriodosPrecioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula_periodos_precio', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelicula_id');
            $table->foreignId('periodo_id');
            $table->decimal('precio');
            $table->timestamps();

            $table->foreign('pelicula_id')
                ->references('id')
                ->on('peliculas');

            $table->foreign('periodo_id')
                ->references('id')
                ->on('periodos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelicula_periodos_precio');
    }
}
