@extends('layouts.front')

@section('title', 'Notre Équipe — ECO+HOLDING')

@section('content')

<section class="hero" style="background-image:url('{{ asset('images/eco.jpeg') }}')">
    <div class="hero-content">
        <h1>Notre Équipe</h1>
        <p>Des professionnels passionnés au service de votre réussite.</p>
    </div>
</section>

<section class="section">
    <h2 class="section-title">Direction Générale</h2>
    <p class="section-subtitle">Une équipe expérimentée et engagée.</p>
    <hr class="section-divider">

    <div class="team-grid">
        <div class="team-member">
            <img src="{{ asset('images/ceo.jpeg') }}" alt="Directeur Général">
            <h3>Directeur Général</h3>
            <p>Fondateur et visionnaire, il pilote la stratégie globale du groupe ECO+HOLDING.</p>
        </div>
    </div>
</section>

<section style="background:var(--light); padding:3rem 2rem;">
    <div class="section" style="padding-top:0; padding-bottom:0;">
        <h2 class="section-title">Nos Engagements</h2>
        <hr class="section-divider">
        <div class="features">
            <div class="feature">
                <div class="feature-icon">🎯</div>
                <h3>Professionnalisme</h3>
                <p>Chaque membre de notre équipe est sélectionné pour son expertise et son engagement.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">📞</div>
                <h3>Disponibilité</h3>
                <p>Nous restons à l'écoute de nos clients pour répondre rapidement à leurs besoins.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🏆</div>
                <h3>Résultats</h3>
                <p>Notre priorité : des résultats concrets et mesurables pour chaque projet.</p>
            </div>
        </div>
    </div>
</section>

@endsection
