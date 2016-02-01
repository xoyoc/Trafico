<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bl extends Model
{
	protected $table='bls';
    //
    protected $fillable = [
        'NumeroBl', 'Contenedor', 'Peso','Bulto',
        'FechaEta','FechaEntregaBl','Naviera',
        'FechaEntregaTransporte',
    ];
}
