<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = 'peliculas';

    protected $fillable = ['codigo_plataforma', 'titulo', 'descripcion', 'fecha_lanzamiento', 'estrellas_promedio', 'total_rentas'];

    protected $hidden = ['created_at', 'updated_at'];

    public function peliculasPosters()
    {
        return $this->hasMany(PeliculaPoster::class, 'pelicula_id');
    }

    public function peliculasEstrellas()
    {
        return $this->hasMany(PeliculaEstrellas::class, 'pelicula_id');
    }

    public function peliculasComentarios()
    {
        return $this->hasMany(PeliculaComentario::class, 'pelicula_id');
    }

    public function peliculaPeriodosPrecio()
    {
        return $this->hasMany(PeliculaPeriodoPrecio::class, 'pelicula_id');
    }
}
