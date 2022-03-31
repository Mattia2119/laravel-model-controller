@extends('layouts.base')

@section('pageTiyle', 'Lista dei Film')


@section('content')

 <ul>
     @foreach($movies as $movie)
     <li>{{$movie['title']}}</li>
     @endforeach
 </ul>

@endsection