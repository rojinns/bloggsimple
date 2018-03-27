@extends('layouts.app')

@section('head')
<title> Something </title>
<link rel="stylesheet" hfref="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
@stop

@section('content')

<div style=" text-align: center;">
	<h1 > Articles </h1>
<button name="button" type="button"><a href="/articles/create"> Write a new article!!! </a></button>
</div>

@foreach ($art as $article)

<article>  
	
	<h2> <a href="/articles/{{ $article->id }}"> {{ $article->name }} </a> </h2>

	<div class="body"> {{ $article->body }}
	</div>
</article>
@endforeach

<div  class="text-center">
	{!! $art->links(); !!}
</div>							<!-- class="text-center " -->

@endsection
