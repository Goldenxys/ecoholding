@extends('layouts.front')

@section('title', 'Prestige Immobilier — ECO+HOLDING')

@section('content')

<section class="hero hero--page" style="background-image:url('{{ asset('images/prestige.jpeg') }}')">
    <div class="hero__overlay"></div>
    <div class="container hero__content">
        <h1 class="hero__title">Prestige Immobilier</h1>
        <p class="hero__subtitle">L'excellence immobilière au service de vos ambitions.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small">Nos prestations</span>
            <h2>Services Immobiliers</h2>
            <p>Un accompagnement complet pour tous vos projets immobiliers.</p>
        </div>

        <div class="grid grid-3">
            <div class="card service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-icon"><i class="fas fa-chart-line"></i></div>
                <h3 class="card-title">Conseil en Investissement</h3>
                <p class="card-text">Analyse de marché, étude de rentabilité et accompagnement personnalisé pour maximiser vos investissements immobiliers.</p>
            </div>

            <div class="card service-card featured" data-aos="fade-up" data-aos-delay="200">
                <div class="card-icon"><i class="fas fa-home"></i></div>
                <h3 class="card-title">Gestion Locative</h3>
                <p class="card-text">Prise en charge complète de la gestion de vos biens : recherche de locataires, suivi des loyers, maintenance.</p>
            </div>

            <div class="card service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-icon"><i class="fas fa-key"></i></div>
                <h3 class="card-title">Vente de Prestige</h3>
                <p class="card-text">Un portefeuille exclusif de biens haut de gamme : villas, appartements de standing et terrains viabilisés.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-card" data-aos="zoom-in">
            <div class="cta-content">
                <h2>Un projet immobilier ?</h2>
                <p>Contactez nos experts pour un accompagnement personnalisé.</p>
                <a href="{{ route('home') }}#contact" class="btn btn-accent btn-large"><i class="fas fa-paper-plane"></i> Nous contacter</a>
            </div>
        </div>
    </div>
</section>

@endsection
