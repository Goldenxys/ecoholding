@extends('layouts.front')

@section('title', 'Services — ECO+HOLDING')

@section('content')

<section class="hero hero--page" style="background-image:url('{{ asset('images/hero-vision.jpeg') }}')">
    <div class="hero__overlay"></div>
    <div class="container hero__content">
        <h1 class="hero__title">Nos Services</h1>
        <p class="hero__subtitle">Des solutions complètes et sur mesure pour accompagner vos projets d'investissement et de développement.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small">Ce que nous offrons</span>
            <h2>Trois Pôles d'Expertise</h2>
            <p>Au service de votre réussite en Côte d'Ivoire et en Afrique.</p>
        </div>

        <div class="grid grid-3">
            <a href="{{ route('prestige-immobilier') }}" class="card service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-icon"><i class="fas fa-building"></i></div>
                <h3 class="card-title">Prestige Immobilier</h3>
                <p class="card-text">Conseil en investissement immobilier, gestion locative et vente de biens de prestige.</p>
            </a>

            <a href="{{ route('translogistique') }}" class="card service-card featured" data-aos="fade-up" data-aos-delay="200">
                <div class="card-icon"><i class="fas fa-truck"></i></div>
                <h3 class="card-title">Eco+Trans-Logistique</h3>
                <p class="card-text">Import-export, transport de marchandises et solutions logistiques intégrées.</p>
            </a>

            <a href="{{ route('regime-fiscal') }}" class="card service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <h3 class="card-title">Conseil Fiscal</h3>
                <p class="card-text">Accompagnement fiscal, optimisation et conformité réglementaire.</p>
            </a>
        </div>

        <div class="grid grid-3 mt-lg">
            <div class="card service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-icon"><i class="fas fa-briefcase"></i></div>
                <h3 class="card-title">Gestion d'Affaires</h3>
                <p class="card-text">Intermédiation commerciale et accompagnement opérationnel sur mesure.</p>
            </div>
            <div class="card service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-icon"><i class="fas fa-rocket"></i></div>
                <h3 class="card-title">Création d'Entreprise</h3>
                <p class="card-text">Accompagnement complet pour l'immatriculation de votre entreprise.</p>
            </div>
            <div class="card service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-icon"><i class="fas fa-handshake"></i></div>
                <h3 class="card-title">Intermédiation</h3>
                <p class="card-text">Mise en relation d'affaires et facilitation de partenariats.</p>
            </div>
        </div>
    </div>
</section>

@endsection
