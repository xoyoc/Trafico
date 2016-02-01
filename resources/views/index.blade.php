@extender('master')

@section('modulo')
    VISTA DE LAS FACTURAS
@stop

@section('contenido')
<h4>LISTADO DE FACTURAS</h4>
@foreach($facturas as $factura)
	<article>
		<a href="/Todas_Facturas/{{$factura->id}}">{{$factura->NumeroFactura}}</a>
	</article>
@endforeach
@stop