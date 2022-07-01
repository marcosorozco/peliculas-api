<?php

namespace App\App\Peliculas;

use App\Models\Pelicula;
use Illuminate\Support\Facades\Http;

class PeliculasObtenerInformacion
{
    static function get(Pelicula $pelicula)
    {
        $response = Http::asJson()->withHeaders([
            'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI0ZWRkYzg5MzM3OTI2ZTM0NjRmM2QxNjVkNGI4MzhiZCIsInN1YiI6IjVlYzM0NTM5M2QzNTU3MDAxY2U1MjFhZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.CwAa-FeAmiuX3U9vg339xAeSsEOnVtjTDdLiNvAppIU'
        ])->get("https://api.themoviedb.org/3/movie/$pelicula->codigo_plataforma}?language=es");
        $peliculaInfo = json_decode($response->body());
        $response = Http::asJson()->withHeaders([
            'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI0ZWRkYzg5MzM3OTI2ZTM0NjRmM2QxNjVkNGI4MzhiZCIsInN1YiI6IjVlYzM0NTM5M2QzNTU3MDAxY2U1MjFhZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.CwAa-FeAmiuX3U9vg339xAeSsEOnVtjTDdLiNvAppIU'
        ])->get("https://api.themoviedb.org/3/movie/$pelicula->codigo_plataforma}/videos?language=es");
        $peliculaVideos = json_decode($response->body());
        $pelicula->videos = $peliculaVideos->results;
        return $pelicula;
    }
}
