@extends('layouts.main')

@section('title', $superhero->name)

@section('content')
    <h1>{{ $superhero->name }}</h1>
    <p><strong>Real Name:</strong> {{ $superhero->real_name }}</p>
    <p><strong>Gender:</strong> {{ $superhero->gender->name }}</p>
    <p><strong>Universe:</strong> {{ $superhero->universe->name }}</p>

    @if($superhero->picture)
        <img src="{{ asset('storage/' . $superhero->picture) }}" width="200">
    @endif
    <br> <br>
    <a href="{{ route('superheroes.index') }}">Back to List</a>
@endsection