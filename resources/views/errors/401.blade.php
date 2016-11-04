<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf8">
		<title>Acceso restringido</title>
		<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
</head>
<body>
<div class="box-admin">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<div class="panel-title">Acceso Restringido</div>
		</div>
		<div class="panel-body">
			<hr>
			<strong class="text-center">
				<p class="text-center">Usted no tiene acceso a esta zona</p>
				<p>
					<a href="{{ route('front.index') }}">¿Desea volver al inicio?</a>
				</p>
			</strong>
			<hr>
			<img src="{{ asset('images/error-access.jpg')}}" class="img-responsive centerblock">
		</div>
	</div>
</div>
		
</body>
</html>