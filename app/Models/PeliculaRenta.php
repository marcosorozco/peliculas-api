<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeliculaRenta extends Model
{
    protected $table = 'peliculas_rentas';

    protected $fillable = ['pelicula_id', 'periodo_id', 'precio_periodo', 'precio_total', 'fecha'];

}
