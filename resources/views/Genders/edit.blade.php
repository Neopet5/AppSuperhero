@extends('layouts.main')

@section('title', 'Edit Gender')

@section('content')
    <h1>Edit Gender</h1>

    <form action="{{ route('genders.update', $gender->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="name">Gender Name:</label>
        <input type="text" name="name" value="{{ $gender->name }}" required>

        <br><br>

        <input type="submit" value="Actualizar">
    </form>
@endsection

