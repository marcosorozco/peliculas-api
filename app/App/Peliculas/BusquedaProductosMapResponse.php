<?php

namespace App\App\Peliculas;

use App\Models\Pelicula;

class BusquedaProductosMapResponse
{
    static function json ($peliculas)
    {
        return $peliculas->map(function ($pelicula) {
            $stdClass = new \stdClass();
            $stdClass->id = $pelicula->id;
            $stdClass->titulo = $pelicula->titulo;
            $stdClass->descripcion = $pelicula->descripcion;
            $stdClass->fecha_lanzamiento = $pelicula->fecha_lanzamiento;
            $stdClass->estrellas_promedio = $pelicula->estrellas_promedio;
            $stdClass->peliculasPoster = $pelicula->peliculasPosters;
            return $stdClass;
        });
    }
}
