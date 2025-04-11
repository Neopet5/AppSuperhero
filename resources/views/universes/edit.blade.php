@extends('layouts.main')

@section('title', 'Editar Universo')

@section('content')
    <h1>Editar Universo</h1>
    <form action="{{ route('universes.update', $universe->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $universe->name }}">

        <br><br>

        <input type="submit" value="Update">
    </form>
<<<<<<< HEAD
@endsection
=======
@endsection

>>>>>>> 3227cab844036346eab5256005f9cb9212456e76
