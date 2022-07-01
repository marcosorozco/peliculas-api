<?php

namespace App\Http\Controllers\Api;

use App\App\Peliculas\BusquedaProductosMapResponse;
use App\App\Peliculas\PeliculaRepositoryInteface;
use App\App\Peliculas\PeliculasObtenerInformacion;
use App\App\Peliculas\PeliculaTO;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeliculaController extends Controller
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
    public function index(Request $request)
    {
        $json = [
            'status' => '200',
            'data' => []
        ];
        $peliculaTO = new PeliculaTO();
        $peliculaTO->setSortByEstrellasPromedio($request->input('sort_by_estrellas'));
        $peliculaTO->setSortByTotalRentas($request->input('sort_by_rentas'));
        $peliculaTO->setPaginate($request->get('paginate', 10));
        try {
            $peliculas = $this->peliculaRepository->buscarPeliculas($peliculaTO);
            $resultado = BusquedaProductosMapResponse::json($peliculas);
            $json['data']['page'] = request('page', 1);
            $json['data']['peliculas'] = $resultado;
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
        $json = [
            'status' => '200',
            'data' => []
        ];
        $peliculaTO = new PeliculaTO();
        $peliculaTO->setId($id);
        $peliculaTO->setPaginate(10);
        try {
            $pelicula = $this->peliculaRepository->findPelicula($peliculaTO);
            $json['data']['pelicula'] = PeliculasObtenerInformacion::get($pelicula);
        } catch (\Exception $error) {
            $json['status'] = 500;
            $json['message'] = $error->getMessage();
        }

        return response()->json($json);
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
