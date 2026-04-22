<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ECO+HOLDING') }} — Connexion</title>

        <!-- Favicon -->
        <link rel="icon" type="image/jpeg" href="{{ asset('images/favicon.png') }}">
        <link rel="shortcut icon" type="image/jpeg" href="{{ asset('images/favicon.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            * { font-family: 'Inter', sans-serif; }

            body {
                margin: 0;
                padding: 0;
                min-height: 100vh;
                background: #f3f4f6;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .login-wrapper {
                width: 100%;
                max-width: 440px;
                padding: 1.5rem;
            }

            .login-logo {
                text-align: center;
                margin-bottom: 2rem;
            }

            .login-logo-img {
                width: 400px;
                max-width: 100%;
                height: auto;
                object-fit: contain;
                display: block;
                margin: 0 auto 0.5rem;
                filter: drop-shadow(0 4px 12px rgba(0,0,0,0.15));
            }

            .login-logo-sub {
                font-size: 0.8rem;
                font-weight: 600;
                letter-spacing: 0.15em;
                text-transform: uppercase;
                color: #9ca3af;
                margin-top: 0.25rem;
            }

            .login-card {
                background: #ffffff;
                border-radius: 16px;
                padding: 2rem;
                box-shadow: 0 20px 60px rgba(0,0,0,0.4), 0 4px 16px rgba(0,0,0,0.2);
            }

            .login-footer {
                text-align: center;
                margin-top: 1.5rem;
                color: #9ca3af;
                font-size: 0.75rem;
            }

            @media (max-width: 768px) {
                .login-logo-img { width: 300px; }
            }

            @media (max-width: 480px) {
                .login-logo-img { width: 250px; }
                .login-wrapper { padding: 1rem; }
                .login-card { padding: 1.5rem; border-radius: 12px; }
            }
        </style>
    </head>
    <body>
        <div class="login-wrapper">
            <div class="login-logo">
                <img src="{{ asset('images/logo.png') }}" alt="ECO+HOLDING" class="login-logo-img">
                <p class="login-logo-sub">Espace Administration</p>
            </div>

            <div class="login-card">
                {{ $slot }}
            </div>

            <div class="login-footer">
                &copy; {{ date('Y') }} ECO+HOLDING — Tous droits réservés
            </div>
        </div>
    </body>
</html>
