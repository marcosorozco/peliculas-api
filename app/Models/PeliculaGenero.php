<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeliculaGenero extends Model
{
    protected $table = 'peliculas_generos';

    protected $fillable = ['pelicula_id', 'genero_id'];

}
