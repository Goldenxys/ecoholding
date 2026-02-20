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
    <a href="{{ url('/') }}">Accueil</a>
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('admin.demandes.index') }}">Admin demandes</a>
</nav>

<main>
    @yield('content')
</main>

<footer>
    <img src="{{ asset('images/logo.png') }}" alt="Logo">
</footer>
</body>
</html>