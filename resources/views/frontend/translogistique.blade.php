@extends('layouts.front')

@section('title', 'Translogistique — ECO+HOLDING')

@section('content')

<section class="hero hero--page" style="background-image:url('{{ asset('images/translogistique.jpeg') }}')">
    <div class="hero__overlay"></div>
    <div class="container hero__content">
        <h1 class="hero__title">Eco+Trans-Logistique</h1>
        <p class="hero__subtitle">Des solutions logistiques fiables pour vos échanges commerciaux.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small">Nos solutions</span>
            <h2>Solutions Logistiques</h2>
            <p>Import-export, transport et logistique intégrée.</p>
        </div>

        <div class="grid grid-3">
            <div class="card service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-icon"><i class="fas fa-ship"></i></div>
                <h3 class="card-title">Import-Export</h3>
                <p class="card-text">Facilitation des échanges commerciaux internationaux : dédouanement, formalités et suivi complet de vos cargaisons.</p>
            </div>

            <div class="card service-card featured" data-aos="fade-up" data-aos-delay="200">
                <div class="card-icon"><i class="fas fa-truck-moving"></i></div>
                <h3 class="card-title">Transport de Marchandises</h3>
                <p class="card-text">Transport routier, maritime et aérien avec une flotte adaptée à tous types de marchandises.</p>
            </div>

            <div class="card service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-icon"><i class="fas fa-warehouse"></i></div>
                <h3 class="card-title">Solutions Logistiques</h3>
                <p class="card-text">Entreposage, gestion des stocks et distribution : une chaîne logistique optimisée de bout en bout.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-card" data-aos="zoom-in">
            <div class="cta-content">
                <h2>Besoin d'une solution logistique ?</h2>
                <p>Notre équipe est à votre disposition pour étudier vos besoins.</p>
                <a href="{{ route('home') }}#contact" class="btn btn-accent btn-large"><i class="fas fa-paper-plane"></i> Nous contacter</a>
            </div>
        </div>
    </div>
</section>

@endsection
