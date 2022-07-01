<?php

namespace App\App\Peliculas;

use App\Models\Pelicula;

class PeliculaRepository implements PeliculaRepositoryInteface
{

    public function buscarPeliculas(PeliculaTO $peliculaTO)
    {
        $pelicula = Pelicula::query();
        $pelicula->with('peliculasPosters');
        $pelicula->when(
            $peliculaTO->getSortByEstrellasPromedio(),
            function ($query) {
                $query->orderBy('estrellas_promedio', 'desc');
            }
        );
        $pelicula->when(
            $peliculaTO->getSortByTotalRentas(),
            function ($query) {
                $query->orderBy('total_rentas', 'desc');
            }
        );
        if ($peliculaTO->getPaginate()) {
            return $pelicula->paginate($peliculaTO->getPaginate());
        }
        return $pelicula->get();
    }

    public function findPelicula(PeliculaTO $peliculaTO)
    {
        return Pelicula::find($peliculaTO->getId());
    }
}
