@extends('layouts.app')

@section('head')
<title> Something </title>
<link rel="stylesheet" hfref="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
@stop

@section('content')
<h1> {{ $article->name }} </h1>

<article>
	{{ $article->body }}
</article>


<div class="form-control"> 

	<!-- <a href="/articles/{{ $article->id }}/edit">  </a> -->
<button name="button" type="button"><a href="/articles/{{ $article->id }}/edit"> Edit {{ $article->name }} </a></button> </div>

@stop