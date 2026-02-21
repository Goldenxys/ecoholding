@extends('layouts.front')

@section('title', 'Régime Fiscal — ECO+HOLDING')

@section('content')

<section class="hero" style="background-image:url('{{ asset('images/eco.jpeg') }}')">
    <div class="hero-content">
        <h1>Conseil en Régime Fiscal</h1>
        <p>Optimisez votre fiscalité avec l'accompagnement de nos experts.</p>
    </div>
</section>

<section class="section">
    <h2 class="section-title">Nos Services Fiscaux</h2>
    <p class="section-subtitle">Un accompagnement sur mesure pour entreprises et investisseurs.</p>
    <hr class="section-divider">

    <div class="cards">
        <div class="card">
            <div class="card-body">
                <h3>Optimisation Fiscale</h3>
                <p>Analyse de votre situation fiscale et mise en place de stratégies légales pour réduire votre charge fiscale tout en restant conforme.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>Conformité Réglementaire</h3>
                <p>Veille réglementaire et mise en conformité avec les obligations fiscales camerounaises et de la zone CEMAC.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>Conseil aux Investisseurs</h3>
                <p>Accompagnement des investisseurs étrangers dans la compréhension du cadre fiscal local et les avantages disponibles.</p>
            </div>
        </div>
    </div>
</section>

@endsection
