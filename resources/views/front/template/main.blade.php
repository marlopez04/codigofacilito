<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> @yield('title', 'Default')</title>
	<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
</head>
<body>
	
	@include('admin.template.partials.nav')
	
	<div class="conteiner">				
		@yield('content')
		
	
	<footer>
		<hr>
		Todos los derechos resevados & copy {{ date('Y')}}
		<div class="pull-right">López Morales Martín</div>
	</footer>
	</div>

	<script src="{{ asset('plugins/jquery/jquery-2.2.4.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
	<script src="{{ asset('plugins/trumbowyg/trumbowyg.js')}}"></script>
	@yield('js')
</body>
</html>