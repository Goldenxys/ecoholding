@extends('layouts.front')

@section('title', 'Services — ECO+HOLDING')

@section('content')

<section class="hero" style="background-image:url('{{ asset('images/hero-vision.jpeg') }}')">
    <div class="hero-content">
        <h1>Nos Services</h1>
        <p>Des solutions complètes et sur mesure pour accompagner vos projets d'investissement et de développement.</p>
    </div>
</section>

<section class="section">
    <h2 class="section-title">Ce que nous offrons</h2>
    <p class="section-subtitle">Trois pôles d'expertise au service de votre réussite.</p>
    <hr class="section-divider">

    <div class="cards">
        <a href="{{ route('prestige-immobilier') }}" class="card">
            <img src="{{ asset('images/prestige.jpeg') }}" alt="Prestige Immobilier">
            <div class="card-body">
                <h3>Prestige Immobilier</h3>
                <p>Conseil en investissement immobilier, gestion locative et vente de biens de prestige. Nous vous accompagnons de A à Z dans vos projets immobiliers.</p>
            </div>
        </a>

        <a href="{{ route('translogistique') }}" class="card">
            <img src="{{ asset('images/translogistique.jpeg') }}" alt="Translogistique">
            <div class="card-body">
                <h3>Translogistique</h3>
                <p>Import-export, transport de marchandises et solutions logistiques intégrées. Une chaîne logistique fiable et efficace.</p>
            </div>
        </a>

        <a href="{{ route('regime-fiscal') }}" class="card">
            <img src="{{ asset('images/eco.jpeg') }}" alt="Conseil Fiscal">
            <div class="card-body">
                <h3>Conseil Fiscal</h3>
                <p>Accompagnement fiscal, optimisation et conformité réglementaire pour entreprises et particuliers investisseurs.</p>
            </div>
        </a>
    </div>
</section>

@endsection
