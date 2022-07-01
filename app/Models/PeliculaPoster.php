<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeliculaPoster extends Model
{
    protected $table = 'pelicula_posters';

    protected $fillable = ['pelicula_id', 'path', 'tipo'];

    protected $hidden = ['id', 'pelicula_id', 'created_at', 'updated_at'];
}
