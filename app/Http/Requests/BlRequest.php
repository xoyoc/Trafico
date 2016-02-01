<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BlRequest extends Request
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
            //        'NumeroBl', 'Contenedor', 'Peso','Bulto','FechaEta','FechaEntregaBl','Naviera','FechaEntregaTransporte',
            'NumeroBl' => 'required',
            'Contenedor' => 'required',
            'Peso' => 'required',
            'Bulto' => 'required',
            'FechaEta' => 'required',
            'FechaEntregaBl' => 'required',
            'Naviera' => 'required',
            'FecheEntregaTransporte' => 'required',
        ];
    }
}
