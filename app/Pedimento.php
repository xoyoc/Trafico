<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedimento extends Model
{
	protected $table='pedimentos';
    //
    protected $fillable = [
        'NumeroPedimento', 'ClaveAduana', 'PedimentoReferencia',
        'FechaPagoValidacion','Rrc',
    ];
}
