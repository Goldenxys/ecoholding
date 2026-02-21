@extends('layouts.front')

@section('title', 'ECO+HOLDING — Accueil')

@section('content')

{{-- Hero --}}
<section class="hero" style="background-image:url('{{ asset('images/hero-vision.jpg') }}')">
    <div class="hero-content">
        <h1>Bienvenue chez ECO+HOLDING</h1>
        <p>Investissement, immobilier de prestige et logistique — votre partenaire de confiance en Afrique.</p>
        <a href="{{ route('services') }}" class="btn btn-accent">Découvrir nos services</a>
        <a href="{{ route('presentation') }}" class="btn btn-outline" style="margin-left:.5rem">En savoir plus</a>
    </div>
</section>

{{-- Services aperçu --}}
<section class="section">
    <h2 class="section-title">Nos Domaines d'Expertise</h2>
    <p class="section-subtitle">Des solutions intégrées pour vos projets les plus ambitieux.</p>
    <hr class="section-divider">

    <div class="cards">
        <a href="{{ route('prestige-immobilier') }}" class="card">
            <img src="{{ asset('images/prestige.jpeg') }}" alt="Prestige Immobilier">
            <div class="card-body">
                <h3>Prestige Immobilier</h3>
                <p>Conseil, gestion et vente de biens immobiliers haut de gamme au Cameroun et en Afrique centrale.</p>
            </div>
        </a>

        <a href="{{ route('translogistique') }}" class="card">
            <img src="{{ asset('images/translogistique.jpeg') }}" alt="Translogistique">
            <div class="card-body">
                <h3>Translogistique</h3>
                <p>Import-export, transport et solutions logistiques complètes pour vos marchandises.</p>
            </div>
        </a>

        <a href="{{ route('regime-fiscal') }}" class="card">
            <img src="{{ asset('images/eco.jpeg') }}" alt="Régime Fiscal">
            <div class="card-body">
                <h3>Conseil Fiscal</h3>
                <p>Optimisation fiscale et accompagnement réglementaire pour les entreprises et investisseurs.</p>
            </div>
        </a>
    </div>
</section>

{{-- Chiffres --}}
<section style="background:var(--light); padding:3rem 2rem;">
    <div class="section" style="padding-top:0; padding-bottom:0;">
        <div class="features">
            <div class="feature">
                <div class="feature-icon">🏗️</div>
                <h3>+50 Projets</h3>
                <p>Projets immobiliers réalisés avec succès à travers le Cameroun.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🌍</div>
                <h3>5 Pays</h3>
                <p>Présence active en Afrique centrale et de l'Ouest.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🤝</div>
                <h3>+200 Clients</h3>
                <p>Clients satisfaits qui nous font confiance au quotidien.</p>
            </div>
        </div>
    </div>
</section>

@endsection
