<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeliculaPeriodoPrecio extends Model
{
    protected $table = 'pelicula_periodos_precio';

    protected $fillable = ['pelicula_id', 'periodo_id', 'precio'];

    public function periodo()
    {
        return $this->belongsTo(Periodo::class);
    }

}
