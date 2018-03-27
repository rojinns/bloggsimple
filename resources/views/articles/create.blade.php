@extends('layouts.app')

@section('content')

<h1> Write a new article </h1>

<hr/>

{!! Form::open(['url'=>'articles'])!!}

@include('articles.form',['submitbuttonname' => 'Add Article'])

{!! Form::close() !!}

@include('errors.list')

@endsection