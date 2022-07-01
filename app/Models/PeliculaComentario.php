<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeliculaComentario extends Model
{
    protected $table = 'peliculas_comentarios';

    protected $fillable = ['pelicula_id', 'comentario', 'fecha'];
}
