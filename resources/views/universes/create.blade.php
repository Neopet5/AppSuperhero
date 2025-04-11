@extends('layouts.main')

@section('title', 'Create Universe')

@section('content')
    <h1>Create a new Universe</h1>
    <form action="{{ route('universes.store') }}" method="POST">
        @csrf
        <label for="name">Universe Name:</label>
        <input type="text" name="name" required>
        <button type="submit">Guardar</button>
    </form>

@endsection

