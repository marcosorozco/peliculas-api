<?php

namespace App\App\Peliculas;

interface PeliculaRepositoryInteface
{

    public function buscarPeliculas(PeliculaTO $peliculaTO);

    public function findPelicula(PeliculaTO $peliculaTO);

    public function buscarPeliculasPalabras(PeliculaTO $peliculaTO);
}
