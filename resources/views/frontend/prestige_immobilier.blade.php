@extends('layouts.front')

@section('title', 'Prestige Immobilier — ECO+HOLDING')

@section('content')

<section class="hero hero--page" style="background-image:url('{{ asset('images/prestige.jpeg') }}')">
    <div class="hero__overlay"></div>
    <div class="container hero__content" data-aos="fade-up">
        <h1 class="hero__title">Prestige Immobilier</h1>
        <p class="hero__subtitle">Gestion, administration et valorisation de patrimoines</p>
    </div>
</section>

<section class="section container">
    <div class="grid grid-3">
        <div class="card card--feature" data-aos="fade-up">
            <div class="card-icon"><i class="fas fa-key"></i></div>
            <h3>Gestion locative</h3>
            <p>Sélection locataires, baux, loyers, relances, entretien.</p>
        </div>
        <div class="card card--feature" data-aos="fade-up" data-aos-delay="100">
            <div class="card-icon"><i class="fas fa-sign-hanging"></i></div>
            <h3>Gestion vente</h3>
            <p>Prospection, offres, négociations, suivi juridique et administratif.</p>
        </div>
        <div class="card card--feature" data-aos="fade-up" data-aos-delay="200">
            <div class="card-icon"><i class="fas fa-house-circle-check"></i></div>
            <h3>Conseils immobiliers</h3>
            <p>Stratégie, marché, juridique, montage financier, valorisation.</p>
        </div>
    </div>

    <div class="grid grid-3 mt-xl">
        <div class="card card--overlay" style="background-image: url('{{ asset('images/immobilier-gestion.jpg') }}');" data-aos="zoom-in">
            <div class="card__overlay">
                <h3>Administration & Entretien</h3>
                <p class="muted">Suivi, coordination, maintenance</p>
            </div>
        </div>
        <div class="card card--overlay" style="background-image: url('{{ asset('images/immobilier-vente.jpg') }}');" data-aos="zoom-in" data-aos-delay="100">
            <div class="card__overlay">
                <h3>Commercialisation</h3>
                <p class="muted">Promotion, visites, reporting</p>
            </div>
        </div>
        <div class="card card--overlay" style="background-image: url('{{ asset('images/immobilier-conseil.jpg') }}');" data-aos="zoom-in" data-aos-delay="200">
            <div class="card__overlay">
                <h3>Conseil immobilier</h3>
                <p class="muted">Études, stratégie, valorisation</p>
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
