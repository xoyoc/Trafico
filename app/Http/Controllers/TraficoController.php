<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Factura;
use App\Http\Requests\FacturaRequest;

class TraficoController extends Controller
{
    //
    public function inicio()
    {
    	return view('welcome');
    }
    public function index()
	{
        $todasfacturas=Factura::all();
        return dd($todasfacturas);
	}
    public function create()
    {	
    	return view('crear_factura');	
    }
    public function store(FacturaRequest $resquest)
    {
    	Factura::create($resquest->all());
    	return redirect('Todas_Facturas');
    }
}
