<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FacturaRequest extends Request
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
            // 'NumeroFactura', 'FechaFactura', 'MonedaFactura', 'Cantidad', 'Mercancia',
            'NumeroFactura' => 'required',
            'FechaFactura' => 'required',
            'MonedaFactura' => 'required',
            'Cantidad' => 'required',
            'Mercancia' => 'required',
        ];
    }
}
