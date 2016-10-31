@extends('front.template.main')

@section('content')
	<h3 class="title-front left">Ultimos Articulos</h3>
	<div class="row">
		<div class="col-md-8">
			<div class="row">

				@foreach($articles as $article)

				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<a href="" class="thumbnail">
							@foreach($article->images as $image)
								<img class="img-responsive inmg-article" src="{{ asset('images/articles/' . $image->name ) }}" alt="...">
							@endforeach
							</a>
							<h3 class="text-center">{{ $article->title }}</h3>
							<hr>
							<i class="fa fa-folder-open-o"></i><a href="">{{ $article->category->name }}</a>
							<div class="pull-right">
								<i class="fa fa-clock-o"> {{ $article->created_at->diffForHumans()}}</i>
							</div>
						</div>
					</div>
				</div>

				@endforeach

		</div>
		{!! $articles->render() !!}

		</div>
		<div class="row right">

			<div class="col-md-4 aside right">
				@include('front.partials.aside')

			</div>
		</div>

	</div>

@endsection












