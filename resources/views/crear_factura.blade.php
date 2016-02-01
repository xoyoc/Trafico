@extends('master')

@section('modulo')
    MODULO DE FACTURAS
@stop

@section('contenido')
	<div class="row">&nbsp</div>
    {!! Form::open(['url' => 'Crear_Factura']) !!}
    	<div class="row">
		    <div class="form-group col-md-3">
			    {!! Form::text('NumeroFactura',null ,['class'=>'form-control', 'placeholder' => 'Numero de factura']); !!}
		    </div>
		    <div class="form-group col-md-4">
		    	{!! Form::label('Fecha de facturacion'); !!}
			    {!! Form::date('FechaFactura',\Carbon\Carbon::now(),['placeholder'=>'Fecha de facturacion']); !!}
		    </div>
		    <div class="form-group col-md-4">
				{!! Form::text('MonedaFactura',null, ['class'=>'form-control','placeholder'=>'Moneda de facturacion']) !!}	    	
		    </div>
		    <div class="form-group col-md-3">
		    	{!! Form::number('Cantidad', 'value',['class'=>'form-control','placeholder'=>'Cantidad de facturacion']); !!}
		    </div>
		    <div class="form-group col-md-6">
		    	{!! Form::text('Mercancia',null,['class'=>'form-control','placeholder'=>'Nombre de la mercancia']) !!}
		    </div>
    	</div>
	    <div class="row">
	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
				{!! Form::submit('Agregar',['class'=>'btn btn-primary']); !!}	
	    	</div>
	    	<div class="col-md-4"></div>
	    </div>
    {!! Form::close() !!}
@stop
