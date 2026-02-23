@extends('layouts.front')

@section('title', 'Eco+Translogistique — ECO+HOLDING')

@section('content')

<section class="hero hero--page" style="background-image:url('{{ asset('images/translogistique.jpeg') }}')">
    <div class="hero__overlay"></div>
    <div class="container hero__content" data-aos="fade-up">
        <h1 class="hero__title">ECO+Trans-Logistique</h1>
        <p class="hero__subtitle">Import-Export &bull; Logistique &bull; Transport &bull; Véhicules</p>
    </div>
</section>

<section class="section container">
    <div class="grid grid-4">
        <div class="card card--feature" data-aos="fade-up">
            <div class="card-icon"><i class="fas fa-globe"></i></div>
            <h3>Import – Export</h3>
            <p>Formalités douanières, suivi des marchandises.</p>
        </div>
        <div class="card card--feature" data-aos="fade-up" data-aos-delay="100">
            <div class="card-icon"><i class="fas fa-boxes-stacked"></i></div>
            <h3>Logistique</h3>
            <p>Approvisionnement, stockage, distribution.</p>
        </div>
        <div class="card card--feature" data-aos="fade-up" data-aos-delay="200">
            <div class="card-icon"><i class="fas fa-truck"></i></div>
            <h3>Transport</h3>
            <p>Gestion de flotte, VTC, coordination des chauffeurs.</p>
        </div>
        <div class="card card--feature" data-aos="fade-up" data-aos-delay="300">
            <div class="card-icon"><i class="fas fa-car"></i></div>
            <h3>Véhicules</h3>
            <p>Vente et achat de véhicules neufs et d'occasion.</p>
        </div>
    </div>

    <div class="grid grid-3 mt-xl">
        <div class="card card--overlay" style="background-image: url('{{ asset('images/trans-import.jpg') }}');" data-aos="zoom-in">
            <div class="card__overlay">
                <h3>Export sécurisé</h3>
                <p class="muted">Conformité, traçabilité</p>
            </div>
        </div>
        <div class="card card--overlay" style="background-image: url('{{ asset('images/trans-logistique.jpg') }}');" data-aos="zoom-in" data-aos-delay="100">
            <div class="card__overlay">
                <h3>Chaîne logistique</h3>
                <p class="muted">Optimisation des coûts</p>
            </div>
        </div>
        <div class="card card--overlay" style="background-image: url('{{ asset('images/trans-transport.jpeg') }}');" data-aos="zoom-in" data-aos-delay="200">
            <div class="card__overlay">
                <h3>Mobilité</h3>
                <p class="muted">Transport fiable</p>
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
