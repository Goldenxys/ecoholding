<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ECO+HOLDING')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<nav>
    <a href="{{ route('home') }}">Accueil</a>
    <a href="{{ route('presentation') }}">Présentation</a>
    <a href="{{ route('services') }}">Services</a>
    @auth
        <a href="{{ route('dashboard') }}">Dashboard</a>
        @if(auth()->user()->role === 'admin')
            <a href="{{ route('admin.dashboard') }}">Admin</a>
        @endif
    @else
        <a href="{{ route('login') }}">Connexion</a>
    @endauth
</nav>

<main>
    @yield('content')
</main>

<footer>
    <img src="{{ asset('images/logo.png') }}" alt="Logo">
</footer>
</body>
</html>