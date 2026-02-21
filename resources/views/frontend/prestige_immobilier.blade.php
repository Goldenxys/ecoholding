@extends('layouts.front')

@section('title', 'Prestige Immobilier — ECO+HOLDING')

@section('content')

<section class="hero" style="background-image:url('{{ asset('images/prestige.jpeg') }}')">
    <div class="hero-content">
        <h1>Prestige Immobilier</h1>
        <p>L'excellence immobilière au service de vos ambitions.</p>
    </div>
</section>

<section class="section">
    <h2 class="section-title">Nos Prestations Immobilières</h2>
    <p class="section-subtitle">Un accompagnement complet pour tous vos projets immobiliers.</p>
    <hr class="section-divider">

    <div class="cards">
        <div class="card">
            <img src="{{ asset('images/immobilier-conseil.jpg') }}" alt="Conseil en investissement">
            <div class="card-body">
                <h3>Conseil en Investissement</h3>
                <p>Analyse de marché, étude de rentabilité et accompagnement personnalisé pour maximiser vos investissements immobiliers.</p>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/immobilier-gestion.jpg') }}" alt="Gestion locative">
            <div class="card-body">
                <h3>Gestion Locative</h3>
                <p>Prise en charge complète de la gestion de vos biens : recherche de locataires, suivi des loyers, maintenance.</p>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/immobilier-vente.jpg') }}" alt="Vente de prestige">
            <div class="card-body">
                <h3>Vente de Prestige</h3>
                <p>Un portefeuille exclusif de biens haut de gamme : villas, appartements de standing et terrains viabilisés.</p>
            </div>
        </div>
    </div>
</section>

@endsection
