@extends('layouts.main')

@section('title', 'Create Universe')

@section('content')
    <h1>Create a new Universe</h1>
    <form action="{{ route('universes.store') }}" method="POST">
        @csrf
        <label for="name">NUniverse Name:</label>
        <input type="text" name="name" required>
        <button type="submit">Guardar</button>
    </form>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 3227cab844036346eab5256005f9cb9212456e76
