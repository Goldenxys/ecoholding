<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ECO+HOLDING') }} — Connexion</title>

        <!-- Favicon -->
        <link rel="icon" type="image/jpeg" href="{{ asset('images/eco.jpeg') }}">
        <link rel="shortcut icon" type="image/jpeg" href="{{ asset('images/eco.jpeg') }}">

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
                max-width: 400px;
                padding: 1.5rem;
            }

            .login-logo {
                text-align: center;
                margin-bottom: 2rem;
            }

            .login-logo img {
                width: 72px;
                height: 72px;
                border-radius: 50%;
                object-fit: cover;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            }

            .login-logo h1 {
                font-size: 1.5rem;
                font-weight: 700;
                color: #111827;
                margin: 0.75rem 0 0;
                letter-spacing: 1px;
            }

            .login-logo h1 span {
                color: #dc2626;
            }

            .login-card {
                background: #ffffff;
                border-radius: 12px;
                padding: 2rem;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08), 0 4px 12px rgba(0, 0, 0, 0.04);
            }

            .login-footer {
                text-align: center;
                margin-top: 1.5rem;
                color: #9ca3af;
                font-size: 0.75rem;
            }
        </style>
    </head>
    <body>
        <div class="login-wrapper">
            <div class="login-logo">
                <a href="/">
                    <img src="{{ asset('images/eco.jpeg') }}" alt="ECO+HOLDING">
                </a>
                <h1>ECO<span>+</span>HOLDING</h1>
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
