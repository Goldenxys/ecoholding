<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ECO+HOLDING') }} — Administration</title>

        <!-- Favicon -->
        <link rel="icon" type="image/jpeg" href="{{ asset('images/eco.jpeg') }}">
        <link rel="shortcut icon" type="image/jpeg" href="{{ asset('images/eco.jpeg') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Source+Sans+3:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!-- Admin CSS -->
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen" style="background:#f0f4f8;">

            {{-- Admin Header --}}
            <header class="admin-header">
                <div class="admin-header-content container">
                    <div class="admin-logo">
                        <a href="{{ route('dashboard') }}">
                            <h2>ECO<span class="text-red">+</span>HOLDING</h2>
                            <span>Espace Administration</span>
                        </a>
                    </div>
                    <nav class="admin-nav">
                        <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                        <a href="{{ route('demandes.index') }}" class="nav-link {{ request()->routeIs('demandes.*') ? 'active' : '' }}">
                            <i class="fas fa-list"></i> Demandes
                        </a>
                        <a href="{{ route('home') }}" class="nav-link" target="_blank">
                            <i class="fas fa-globe"></i> Voir le site
                        </a>
                        <div class="admin-user-menu" x-data="{ open: false }">
                            <button @click="open = !open" class="nav-link user-btn">
                                <i class="fas fa-user-circle"></i> {{ Auth::user()->name }}
                                <i class="fas fa-chevron-down" style="font-size:0.7rem;"></i>
                            </button>
                            <div x-show="open" @click.away="open = false" class="user-dropdown" x-cloak>
                                <a href="{{ route('profile.edit') }}"><i class="fas fa-cog"></i> Profil</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"><i class="fas fa-sign-out-alt"></i> Déconnexion</button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>

            <!-- Page Content -->
            <main class="admin-main">
                @hasSection('content')
                    @yield('content')
                @else
                    {{ $slot }}
                @endif
            </main>

            {{-- Admin Footer --}}
            <footer class="admin-footer">
                <div class="container" style="text-align:center;">
                    <p>&copy; {{ date('Y') }} ECO+HOLDING — Espace Administration</p>
                </div>
            </footer>
        </div>

    </body>
</html>
