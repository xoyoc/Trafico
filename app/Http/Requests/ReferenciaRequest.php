<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ReferenciaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'Referencia', 'FechaRecepcionDocumento', 'NumeroBl','FechaRevalidacion','FechaModulacion','ReferenciaNumeroFactura','FechaPrevio','ObservacionPrevio','FechaClasificacion','FechaEntregaEjecutivo','FechaAnticipo','FechaSalidaFFCC',
            'Referencia' => 'required',
            'FechaRecepcionDocumento' => 'required',
            'NumeroBl' => 'required',
            'FechaRevalidacion' => 'required',
            'FechaModulacion' => 'required',
            'ReferecniaNumeroFactura' => 'required',
            'FechaPrevio' => 'required',
            'ObservacionPrevio' => 'required',
            'FechaClasificacion' => 'required',
            'FechaEntregaEjecutivo' => 'required',
            'FechaAnticipo' => 'required',
            'FechaSalidaFFCC' => 'required',
        ];
    }
}
