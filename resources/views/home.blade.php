@extends('layouts.app')

@section('content')
<div class="container">
        <h1>Lista Film</h1>
        <div class="row">
            @foreach ($movieList as $movie)
                <div class="col-sm-12 col-md-6 col-lg-3">
                    @include('partials.cards')
                </div>
            @endforeach
        </div>
    </div>
@endsection
