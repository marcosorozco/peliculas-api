<?php

namespace App\Http\Controllers\Api;

use App\App\Peliculas\PeliculaRepositoryInteface;
use App\App\Peliculas\PeliculaTO;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeliculaComentarioController extends Controller
{
    /**
     * @var PeliculaRepositoryInteface
     */
    private $peliculaRepository;

    public function __construct(PeliculaRepositoryInteface $peliculaRepository)
    {
        $this->peliculaRepository = $peliculaRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pelicula_id, Request $request)
    {
        $json = [
            'status' => '200',
            'resultado' => []
        ];
        $peliculaTO = new PeliculaTO();
        $peliculaTO->setId($pelicula_id);
        try {
            $pelicula = $this->peliculaRepository->findPelicula($peliculaTO);
            $json['resultado']['comentarios'] = $pelicula->peliculasComentarios;
        } catch (\Exception $error) {
            $json['status'] = 500;
            $json['message'] = $error->getMessage();
            $json['trace'] = $error->getTrace();
        }

        return response()->json($json);
    }

    public function guardarComentario($pelicula_id, Request $request)
    {
        $json = [
            'status' => '200',
            'resultado' => []
        ];
        $peliculaTO = new PeliculaTO();
        $peliculaTO->setId($pelicula_id);
        $peliculaTO->setName($request->input('name'));
        $peliculaTO->setComentario($request->input('comentario'));
        try {
            $this->peliculaRepository->guardarComentario($peliculaTO);
        } catch (\Exception $error) {
            $json['status'] = 500;
            $json['message'] = $error->getMessage();
            $json['trace'] = $error->getTrace();
        }

        return response()->json($json);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
