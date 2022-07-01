<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasRentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas_rentas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelicula_id');
            $table->foreignId('periodo_id');
            $table->decimal('precio_periodo');
            $table->decimal('precio_total');
            $table->date('fecha');
            $table->timestamps();

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
        Schema::dropIfExists('peliculas_rentas');
    }
}
