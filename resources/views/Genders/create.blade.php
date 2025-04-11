@extends('layouts.main')

@section('title', 'Create gender')

@section('content')
    <h1>Add a New Gender</h1>

    <form action="{{ route('genders.store') }}" method="POST">
        @csrf
        <label for="name">Gender Name:</label>
        <input type="text" name="name" required>
        <button type="submit">Guardar</button>
    </form>
@endsection