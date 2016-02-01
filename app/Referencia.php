<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
	protected $table='referencias';
    //
    protected $fillable = [
        'Referencia', 'FechaRecepcionDocumento', 'NumeroBl','FechaRevalidacion',
        'FechaModulacion','ReferenciaNumeroFactura','FechaPrevio','ObservacionPrevio',
        'FechaClasificacion','FechaEntregaEjecutivo','FechaAnticipo','FechaSalidaFFCC',
    ];
}
