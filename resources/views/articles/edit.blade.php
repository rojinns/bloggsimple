@extends('layouts.app')

@section('content')

<h1> Edit the article: </h1>

<hr/>

{!! Form::model($article, ['method'=>'PATCH', 'action'=> ['ArticlesController@update',$article->id]]) !!}
@include('articles.form',['submitbuttonname'=> 'Update Article'])
{!! Form::close() !!}

@include('errors.list')

@endsection