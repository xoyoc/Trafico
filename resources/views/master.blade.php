<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SISTEMA DE SEGUIMIENTO DE OPERACIONES ADUANANERAS</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="bg-primary row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2 class="text-center">SISTEMA DE SEGUIMIENTO DE OPERACIONES ADUANAERAS</h2>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">&nbsp</div>
		<ul class="nav nav-pills">
			<li role="presentation" class="active"><a href="#">Inicio</a></li>
			<li role="presentation"><a href="#">Referencias</a></li>
			<li role="presentation"><a href="#">Bl's</a></li>
			<li role="presentation"><a href="#">Facturas</a></li>
			<li role="presentation"><a href="#">Usuarios</a></li>
			<li role="presentation"><a href="#">Ayuda</a></li>
		</ul>
		<div class="row">&nbsp</div>
		<div class="row bg-primary">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h3 class="text-center">@yield('modulo')</h3>
			</div>
			<div class="col-md-4"></div>
		</div>
		<div class="row bg-success">
			@yield('contenido')
		</div>
	</div>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>