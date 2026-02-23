@extends('layouts.front')

@section('title', 'Régime Fiscal — ECO+HOLDING')

@section('content')

<section class="hero hero--page" style="background-image:url('{{ asset('images/eco.jpeg') }}')">
    <div class="hero__overlay"></div>
    <div class="container hero__content">
        <h1 class="hero__title">Conseil en Régime Fiscal</h1>
        <p class="hero__subtitle">Optimisez votre fiscalité avec l'accompagnement de nos experts.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small">Nos expertises</span>
            <h2>Services Fiscaux</h2>
            <p>Un accompagnement sur mesure pour entreprises et investisseurs.</p>
        </div>

        <div class="grid grid-3">
            <div class="card service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-icon"><i class="fas fa-calculator"></i></div>
                <h3 class="card-title">Optimisation Fiscale</h3>
                <p class="card-text">Analyse de votre situation fiscale et mise en place de stratégies légales pour réduire votre charge fiscale tout en restant conforme.</p>
            </div>

            <div class="card service-card featured" data-aos="fade-up" data-aos-delay="200">
                <div class="card-icon"><i class="fas fa-balance-scale"></i></div>
                <h3 class="card-title">Conformité Réglementaire</h3>
                <p class="card-text">Veille réglementaire et mise en conformité avec les obligations fiscales ivoiriennes et de la zone UEMOA.</p>
            </div>

            <div class="card service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-icon"><i class="fas fa-globe-africa"></i></div>
                <h3 class="card-title">Conseil aux Investisseurs</h3>
                <p class="card-text">Accompagnement des investisseurs étrangers dans la compréhension du cadre fiscal local et les avantages disponibles.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-card" data-aos="zoom-in">
            <div class="cta-content">
                <h2>Besoin d'un conseil fiscal ?</h2>
                <p>Nos experts sont à votre disposition pour optimiser votre situation fiscale.</p>
                <a href="{{ route('home') }}#contact" class="btn btn-accent btn-large"><i class="fas fa-paper-plane"></i> Nous contacter</a>
            </div>
        </div>
    </div>
</section>

@endsection
