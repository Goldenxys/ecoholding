<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'ECO+HOLDING')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

{{-- ── Navbar ─────────────────────────────────────────── --}}
<nav class="navbar">
    <a href="{{ route('home') }}" class="navbar-brand">
        <span class="brand-eco">ECO+</span>HOLDING
    </a>

    <button class="navbar-toggle" onclick="document.querySelector('.navbar-links').classList.toggle('open')">☰</button>

    <div class="navbar-links">
        <a href="{{ route('home') }}">Accueil</a>
        <a href="{{ route('presentation') }}">Présentation</a>

        {{-- Dropdown Services --}}
        <div class="nav-dropdown">
            <a href="{{ route('services') }}">Services</a>
            <div class="nav-dropdown-menu">
                <a href="{{ route('prestige-immobilier') }}">Prestige Immobilier</a>
                <a href="{{ route('translogistique') }}">Translogistique</a>
                <a href="{{ route('regime-fiscal') }}">Régime Fiscal</a>
            </div>
        </div>

        <a href="{{ route('vision-valeurs') }}">Vision & Valeurs</a>
        <a href="{{ route('equipe') }}">Équipe</a>

        @auth
            <a href="{{ route('dashboard') }}">Dashboard</a>
            @if(auth()->user()->role === 'admin')
                <a href="{{ route('admin.dashboard') }}">Admin</a>
            @endif
        @else
            <a href="{{ route('login') }}">Connexion</a>
        @endauth
    </div>
</nav>

{{-- ── Contenu ────────────────────────────────────────── --}}
<main>
    @yield('content')
</main>

{{-- ── Footer ─────────────────────────────────────────── --}}
<footer class="site-footer">
    <div class="footer-grid">
        <div class="footer-col">
            <h4>ECO+HOLDING</h4>
            <p>Votre partenaire de confiance pour l'investissement, l'immobilier de prestige et la logistique en Afrique.</p>
        </div>
        <div class="footer-col">
            <h4>Liens rapides</h4>
            <a href="{{ route('home') }}">Accueil</a><br>
            <a href="{{ route('presentation') }}">Présentation</a><br>
            <a href="{{ route('services') }}">Services</a><br>
            <a href="{{ route('equipe') }}">Équipe</a>
        </div>
        <div class="footer-col">
            <h4>Services</h4>
            <a href="{{ route('prestige-immobilier') }}">Prestige Immobilier</a><br>
            <a href="{{ route('translogistique') }}">Translogistique</a><br>
            <a href="{{ route('regime-fiscal') }}">Régime Fiscal</a>
        </div>
        <div class="footer-col">
            <h4>Contact</h4>
            <p>Email : contact@ecoholding.com</p>
            <p>Tél : +237 6XX XXX XXX</p>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; {{ date('Y') }} ECO+HOLDING — Tous droits réservés.
    </div>
</footer>

</body>
</html>
