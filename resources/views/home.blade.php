@extends('layouts.app')

@section('title', 'Peliculas por género')

@section('content')
    <div class="container mt-4">
        <h1>Lista de géneros de películas</h1>
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ url('movies/genre/Comedy') }}">Comedias</a></li>
            <li class="list-group-item"><a href="{{ url('movies/genre/Drama') }}">Drama</a></li>
            <li class="list-group-item"><a href="{{ url('movies/genre/Romance') }}">Románticas</a></li>
            <li class="list-group-item"><a href="{{ url('movies/genre/Animation') }}">Animación</a></li>
            <li class="list-group-item"><a href="{{ url('movies/genre/Action') }}">Acción</a></li>
        </ul>
    </div>
@endsection
