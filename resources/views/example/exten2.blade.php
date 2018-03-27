@extends('rootview')

@section('head')
<title> checking out!! </title>

<link rel="stylesheet" hfref="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

@stop

@section('content')
<ul>
@if(count($team))
<h2> The team: </h2>
 @foreach($team as $member)
 <li> {{ $member }} </li>
</ul>
@endforeach
@endif

@stop

@section('footer')

<script> alert("Hello"); </script>

@stop