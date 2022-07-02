<?php

namespace App\App\Peliculas;

use App\Models\Pelicula;
use App\Models\PeliculaComentario;
use App\Models\PeliculaEstrellas;
use App\Models\PeliculaRenta;
use Illuminate\Support\Facades\DB;

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

    public function buscarPeliculasPalabras(PeliculaTO $peliculaTO)
    {
        $pelicula = Pelicula::query();
        $pelicula->with('peliculasPosters');
        $pelicula->where('titulo', 'like', '%'.$peliculaTO->getQuery().'%');
        $pelicula->orWhere('descripcion', 'like', '%'.$peliculaTO->getQuery().'%');
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

    public function guardarVotacion(PeliculaTO $peliculaTO)
    {
        DB::transaction(function () use ($peliculaTO) {
            PeliculaEstrellas::insert([
                'pelicula_id' => $peliculaTO->getId(),
                'estrellas' => $peliculaTO->getEstrellas()
            ]);
            $pelicula = $this->findPelicula($peliculaTO);
            $pelicula->estrellas_promedio = $pelicula->peliculasEstrellas->sum('estrellas')/$pelicula->peliculasEstrellas->count();
            $pelicula->save();
        });
    }

    public function guardarComentario(PeliculaTO $peliculaTO)
    {
        PeliculaComentario::insert([
            'pelicula_id' => $peliculaTO->getId(),
            'name' => $peliculaTO->getName(),
            'comentario' => $peliculaTO->getComentario()
        ]);
    }

    public function guardarRenta(PeliculaTO $peliculaTO)
    {
        PeliculaRenta::insert([
            'pelicula_id' => $peliculaTO->getId(),
            'periodo_id' => $peliculaTO->getPeriodoId(),
            'precio_periodo' => $peliculaTO->getPrecio(),
            'precio_total' => $peliculaTO->getPrecioTotal(),
            'fecha' => $peliculaTO->getFecha(),
        ]);
    }
}
