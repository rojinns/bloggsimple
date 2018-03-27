@extends('rootview')



@section('head')
<title> checking out!! </title>

<link rel="stylesheet" hfref="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

@stop



@section('content')

<h1> Excuse Me! Is it working?? </h1>

<p> Hello! Can you hear me? </p>


@if ($name=='funnyy')
<h1> That's funny </h1>
 @else
 <h1> Not that funny.. </h1>
 @endif

 @foreach($team as $member)
 <li> {{ $member }} </li>
</ul>
@endforeach

@stop

@section('footer')

<script> alert("Hello"); </script>

@stop
