@extends('admin.template.main')

@section('content')
	<h3 class="title-front left">Ultimos Articulos</h3>
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<a href="" class="thumbnail">
								<img class="img-responsive inmg-article" src="{{ asset('images/logo-lmm.png')}}" alt="...">
							</a>
							<h3 class="text-center">Titulo de este nuevo articulo veamos si es largo</h3>
							<hr>
							<i class="fa fa-folder-open-o"></i><a href="">Category</a>
							<div class="pull-right">
								<i class="fa fa-clock-o">Hace 3 minutos</i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




@endsection












