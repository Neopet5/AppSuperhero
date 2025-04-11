<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Superheroes App')</title>
    @vite(['resources/sass/style.scss', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('superheroes.index') }}">SuperHeroes</a>
            <a href="{{ route('genders.index') }}">Genders</a>
            <a href="{{ route('universes.index') }}">Universes</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>

