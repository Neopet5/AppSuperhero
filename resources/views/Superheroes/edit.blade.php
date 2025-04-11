@extends('layouts.main')

@section('title', 'Edit Superheroe')

@section('content')
    <h1>Edit Superheroe</h1>

    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <label>Name:</label>
        <input type="text" name="name" value="{{ $superhero->name }}" required><br>

        <label>Real Name:</label>
        <input type="text" name="real_name" value="{{ $superhero->real_name }}" required><br>

        <label>Género:</label>
        <select name="gender_id">
            @foreach($genders as $gender)
                <option value="{{ $gender->id }}" {{ $superhero->gender_id == $gender->id ? 'selected' : '' }}>
                    {{ $gender->name }}
                </option>
            @endforeach
        </select><br>

        <label>Universe:</label>
        <select name="universe_id">
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}" {{ $superhero->universe_id == $universe->id ? 'selected' : '' }}>
                    {{ $universe->name }}
                </option>
            @endforeach
        </select><br>

        <label>Imagen:</label>
        <input type="file" name="picture"><br><br>

        <button type="submit">Actualizar</button>
    </form>
@endsection