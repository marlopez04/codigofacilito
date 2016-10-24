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
				<div class="col-md-4 aside">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title">Panel primary</h3>
					  </div>
					  <div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item"><span class="badge">14</span> Cras justo odio</li>
						  	<li class="list-group-item"><span class="badge">2</span>Dapibus ac facilisis in</li>
						  	<li class="list-group-item"><span class="badge">1</span>Morbi leo risus</li>
						</ul>

					  </div>
					</div>

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title">Panel primary</h3>
					  </div>
					  <div class="panel-body">
						<span class="label label-default">Default</span>
						<span class="label label-primary">Primary</span>
						<span class="label label-success">Success</span>
						<span class="label label-warning">Warning</span>
						<span class="label label-danger">Danger</span>
						<span class="label label-info">Info</span>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection












