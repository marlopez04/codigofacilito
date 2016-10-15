@extends('admin.template.main')

@section('title', 'Listado de tags')

@section('content')
	<a href="{{ route('admin.tags.create') }}" class="btn btn-info">Registrar nuevo Tag</a>
	<!-- BUSCADOR DE TAGS -->
	
		{!! Form::open(['route' => 'admin.tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right'])!!}
			<div class="form-group">
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tag..', 'aria-describedby' => 'search'])!!}
			</div>

		{!! Form::close() !!}
	
	<!-- FIN DEL BUSCADOR-->
	<hr>
 	<table class="table table-striped">
 		<thead>
 			<th>ID</th>
 			<th>Nombre</th>
 			<th>Acción</th>
 		</thead>
 		<tbody>
 			@foreach($tags as $tag)
				<tr>
					<td>{{ $tag->id    }}</td>
					<td>{{ $tag->name }}</td>
					<td>
						<a href="{{ route('admin.tags.edit', $tag->id)}}" class="btn btn-warning"> <span class="glyphicon glyphicon-wrench"></span></a>
						
						<a href="{{ route('admin.tags.destroy', $tag->id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
					</td>
				</tr>
 			@endforeach
 		</tbody>
 	</table>
 	<div class="text-center">
 		{!! $tags->render() !!}
 	</div>
@endsection