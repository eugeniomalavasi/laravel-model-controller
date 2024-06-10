@extends('layouts.app')

@section('content')
    <h1>Lista Film</h1>
    <ul>
        @foreach ($movieList as $movie)
            <li>{{$movie->title}}</li>
            <li>{{$movie->vote}}</li>
            </ul>
            <img src="{{$movie->image}}" alt="">
        @endforeach
@endsection