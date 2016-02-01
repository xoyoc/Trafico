<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PedimentoRequest extends Request
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
            //'NumeroPedimento', 'ClaveAduana', 'PedimentoReferencia','FechaPagoValidacion','Rrc',
            'NumeroPedimento' => 'required',
            'ClaveAduana' => 'required',
            'PedimentoReferencia' => 'required',
            'FechaPagoValidacion' => 'required',
            'Rfc' => 'required',
        ];
    }
}
