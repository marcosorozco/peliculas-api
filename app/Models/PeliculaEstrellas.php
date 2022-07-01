<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeliculaEstrellas extends Model
{
    protected $table = 'peliculas_estrellas';

    protected $fillable = ['pelicula_id', 'estrellas'];
}
