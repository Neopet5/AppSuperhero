@extends('layouts.main')

@section('title', 'Create Superheroe')

@section('content')
    <h1>Crear New Superheroe</h1>

    <form action="{{ route('superheroes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br>

        <label>Real Name:</label>
        <input type="text" name="real_name" required><br>

        <label>Gender:</label>
        <select name="gender_id">
            @foreach($genders as $gender)
                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
            @endforeach
        </select><br>

        <label>Universe:</label>
        <select name="universe_id">
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}">{{ $universe->name }}</option>
            @endforeach
        </select><br>

        <label>Imagen:</label>
        <input type="file" name="picture"><br><br>

        <button type="submit">Guardar</button>
    </form>
@endsection


    <a href="{{ route('superheroes.index') }}">Back to List</a>

</body>
</html>

