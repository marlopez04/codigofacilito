@extends('front.template.main')

@section('title', $article->title)

@section('content')
	<h3 class="title-front left">{{ $article->title}}</h3>
	<div class="row">
		<div class="col-md-9">
			{!! $article->content !!}
		</div>
		<div class="col-md-3 aside">
			@include('front.partials.aside')
		</div>
	</div>
@endsection