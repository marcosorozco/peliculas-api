<?php

namespace App\App\Peliculas;

interface PeliculaRepositoryInteface
{

    public function buscarPeliculas(PeliculaTO $peliculaTO);

    public function findPelicula(PeliculaTO $peliculaTO);

    public function buscarPeliculasPalabras(PeliculaTO $peliculaTO);

    public function guardarVotacion(PeliculaTO $peliculaTO);

    public function guardarComentario(PeliculaTO $peliculaTO);

    public function guardarRenta(PeliculaTO $peliculaTO);
}
