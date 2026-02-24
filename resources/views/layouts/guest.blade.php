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
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .guest-bg {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                background: linear-gradient(135deg, #1a202c 0%, #2d3748 50%, #1a202c 100%);
                padding: 1.5rem;
                position: relative;
                overflow: hidden;
            }
            .guest-bg::before {
                content: '';
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle at 30% 50%, rgba(229, 62, 62, 0.08) 0%, transparent 50%),
                            radial-gradient(circle at 70% 50%, rgba(229, 62, 62, 0.05) 0%, transparent 50%);
                animation: subtleMove 20s ease-in-out infinite;
            }
            @keyframes subtleMove {
                0%, 100% { transform: translate(0, 0); }
                50% { transform: translate(-2%, 1%); }
            }
            .guest-card {
                width: 100%;
                max-width: 420px;
                background: #ffffff;
                border-radius: 16px;
                box-shadow: 0 25px 60px rgba(0, 0, 0, 0.3);
                overflow: hidden;
                position: relative;
                z-index: 1;
            }
            .guest-card-header {
                background: #ffffff;
                padding: 2.5rem 2rem 1.5rem;
                text-align: center;
                border-bottom: 1px solid #f0f0f0;
            }
            .guest-logo-img {
                width: 70px;
                height: 70px;
                border-radius: 50%;
                object-fit: cover;
                margin: 0 auto 1rem;
                display: block;
                border: 3px solid #e53e3e;
                box-shadow: 0 4px 15px rgba(229, 62, 62, 0.2);
            }
            .guest-logo-text {
                font-family: 'Montserrat', sans-serif;
                font-weight: 900;
                font-size: 1.8rem;
                letter-spacing: 2px;
                color: #1a202c;
                margin: 0;
            }
            .guest-logo-text span {
                color: #e53e3e;
            }
            .guest-subtitle {
                font-family: 'Montserrat', sans-serif;
                font-size: 0.85rem;
                color: #718096;
                margin-top: 0.3rem;
                font-weight: 500;
                letter-spacing: 0.5px;
            }
            .guest-card-body {
                padding: 2rem;
            }
            .guest-footer {
                text-align: center;
                margin-top: 2rem;
                position: relative;
                z-index: 1;
            }
            .guest-footer p {
                color: rgba(255, 255, 255, 0.4);
                font-family: 'Montserrat', sans-serif;
                font-size: 0.75rem;
                letter-spacing: 0.5px;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased" style="margin:0; padding:0;">
        <div class="guest-bg">

            <div class="guest-card">
                <div class="guest-card-header">
                    <a href="/" style="text-decoration:none;">
                        <img src="{{ asset('images/eco.jpeg') }}" alt="ECO+HOLDING" class="guest-logo-img">
                        <h1 class="guest-logo-text">ECO<span>+</span>HOLDING</h1>
                        <p class="guest-subtitle">Espace sécurisé</p>
                    </a>
                </div>
                <div class="guest-card-body">
                    {{ $slot }}
                </div>
            </div>

            <div class="guest-footer">
                <p>&copy; {{ date('Y') }} ECO+HOLDING — Tous droits réservés</p>
            </div>

        </div>
    </body>
</html>
