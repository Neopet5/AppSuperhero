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
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 3227cab844036346eab5256005f9cb9212456e76
