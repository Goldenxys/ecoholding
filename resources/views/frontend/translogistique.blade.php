@extends('layouts.front')

@section('title', 'Translogistique — ECO+HOLDING')

@section('content')

<section class="hero" style="background-image:url('{{ asset('images/translogistique.jpeg') }}')">
    <div class="hero-content">
        <h1>Translogistique</h1>
        <p>Des solutions logistiques fiables pour vos échanges commerciaux.</p>
    </div>
</section>

<section class="section">
    <h2 class="section-title">Nos Solutions Logistiques</h2>
    <p class="section-subtitle">Import-export, transport et logistique intégrée.</p>
    <hr class="section-divider">

    <div class="cards">
        <div class="card">
            <img src="{{ asset('images/trans-import.jpg') }}" alt="Import-Export">
            <div class="card-body">
                <h3>Import-Export</h3>
                <p>Facilitation des échanges commerciaux internationaux : dédouanement, formalités et suivi complet de vos cargaisons.</p>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/trans-transport.jpeg') }}" alt="Transport">
            <div class="card-body">
                <h3>Transport de Marchandises</h3>
                <p>Transport routier, maritime et aérien avec une flotte adaptée à tous types de marchandises.</p>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/trans-logistique.jpg') }}" alt="Logistique">
            <div class="card-body">
                <h3>Solutions Logistiques</h3>
                <p>Entreposage, gestion des stocks et distribution : une chaîne logistique optimisée de bout en bout.</p>
            </div>
        </div>
    </div>
</section>

@endsection
