<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('peliculas', \App\Http\Controllers\Api\PeliculaController::class);


Route::get('peliculas/buscar-peliculas/{query}', [\App\Http\Controllers\Api\PeliculaController::class, 'buscarPeliculas'])
    ->name('peliculas.buscarPeliculas');

Route::post('peliculas/{pelicula_id}/estrellas', [\App\Http\Controllers\Api\PeliculaController::class, 'guardarVotacion']);

Route::post('peliculas/{pelicula_id}/renta', [\App\Http\Controllers\Api\PeliculaController::class, 'guardarRentaPelicula']);

Route::get('peliculas/{pelicula_id}/comentarios', [\App\Http\Controllers\Api\PeliculaComentarioController::class, 'index']);

Route::post('peliculas/{pelicula_id}/comentarios', [\App\Http\Controllers\Api\PeliculaComentarioController::class, 'guardarComentario']);
