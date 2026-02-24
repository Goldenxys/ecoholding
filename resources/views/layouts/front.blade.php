<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="ECO+HOLDING - Cabinet de gestion d'affaires et d'intermédiation à Abidjan. Nous facilitons vos affaires, vous récoltez les résultats.">
    <title>@yield('title', 'ECO+HOLDING - Nous facilitons vos affaires')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('images/eco.jpeg') }}">
    <link rel="shortcut icon" type="image/jpeg" href="{{ asset('images/eco.jpeg') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- AOS Animation Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @yield('extra_css')
</head>
<body>

{{-- ── Navigation ─────────────────────────────────────── --}}
<nav class="navbar">
    <div class="container navbar-container">
        <a href="{{ route('home') }}" class="navbar-logo">
            ECO<span>+</span>HOLDING
        </a>

        <ul class="navbar-menu">
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li class="dropdown">
                <a href="{{ route('services') }}">Services</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('regime-fiscal') }}">Régime Fiscal</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">À propos</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('presentation') }}">Présentation</a></li>
                    <li><a href="{{ route('vision-valeurs') }}">Vision & Valeurs</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Pôles</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('prestige-immobilier') }}">Prestige Immobilier</a></li>
                    <li><a href="{{ route('translogistique') }}">Translogistique</a></li>
                </ul>
            </li>
            <li><a href="{{ route('equipe') }}">Notre Équipe</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <button class="navbar-toggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>

{{-- ── Contenu principal ──────────────────────────────── --}}
<main>
    @yield('content')
</main>

{{-- ── Footer ─────────────────────────────────────────── --}}
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            {{-- À propos --}}
            <div class="footer-section">
                <h4>ECO<span style="color: var(--couleur-rouge-accent)">+</span>HOLDING</h4>
                <p>Cabinet de gestion d'affaires et d'intermédiation basé à Abidjan. Nous facilitons vos affaires, vous récoltez les résultats.</p>
                <div class="footer-social">
                    <a href="https://www.facebook.com/share/1HxMuKV6K7/" target="_blank" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.tiktok.com/@eco.plus.holding?_r=1&_t=ZS-93ZZtAjgvqC" target="_blank" aria-label="TikTok">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/eco-plus-holding-3ba682282" target="_blank" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://wa.me/22504477268" target="_blank" aria-label="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            {{-- Services --}}
            <div class="footer-section">
                <h4>Nos Services</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('services') }}">Gestion d'affaires</a></li>
                    <li><a href="{{ route('prestige-immobilier') }}">Prestige Immobilier</a></li>
                    <li><a href="{{ route('translogistique') }}">Eco+Trans-Logistique</a></li>
                    <li><a href="{{ route('regime-fiscal') }}">Conseil fiscal</a></li>
                </ul>
            </div>

            {{-- Liens rapides --}}
            <div class="footer-section">
                <h4>Liens rapides</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="{{ route('presentation') }}">Présentation</a></li>
                    <li><a href="{{ route('equipe') }}">Notre équipe</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div class="footer-section">
                <h4>Contact</h4>
                <ul class="footer-links">
                    <li><i class="fas fa-map-marker-alt"></i> Cocody-Riviera Palmeraie<br>Abidjan, Côte d'Ivoire</li>
                    <li><i class="fas fa-phone"></i> +225 0504477268 / 0705928780</li>
                    <li><i class="fas fa-envelope"></i> contact@ecoholding.com</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} ECO+HOLDING. Tous droits réservés. |
                <a href="#">Mentions légales</a> |
                <a href="#">Politique de confidentialité</a>
            </p>
        </div>
    </div>
</footer>

{{-- ── Scripts ────────────────────────────────────────── --}}
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        easing: 'ease-out-cubic',
        once: true,
        offset: 120,
        delay: 100
    });
</script>
<script src="{{ asset('js/main.js') }}"></script>

@yield('extra_js')

</body>
</html>
