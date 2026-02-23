@extends('layouts.front')

@section('title', 'Notre Équipe — ECO+HOLDING')

@section('content')

<section class="hero hero--page" style="background-image:url('{{ asset('images/eco.jpeg') }}')">
    <div class="hero__overlay"></div>
    <div class="container hero__content">
        <h1 class="hero__title">Notre Équipe</h1>
        <p class="hero__subtitle">Des professionnels passionnés au service de votre réussite.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small">Direction</span>
            <h2>Direction Générale</h2>
            <p>Une équipe expérimentée et engagée pour piloter la stratégie du groupe.</p>
        </div>

        <div class="grid grid-3" style="max-width: 400px; margin: 0 auto;">
            <div class="card team-card" data-aos="zoom-in">
                <div class="team-card__image">
                    <img src="{{ asset('images/ceo.jpeg') }}" alt="Directeur Général">
                    <div class="team-overlay">
                        <div class="footer-social" style="justify-content:center;">
                            <a href="https://www.linkedin.com/in/eco-plus-holding-3ba682282" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://wa.me/22504477268" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-card__content">
                    <div class="team-role">Fondateur & CEO</div>
                    <h3 class="card-title">Directeur Général</h3>
                    <p class="card-text">Visionnaire et entrepreneur, il pilote la stratégie globale du groupe ECO+HOLDING.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background: var(--couleur-gris-clair);">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small">Nos forces</span>
            <h2>Nos Engagements</h2>
        </div>
        <div class="grid grid-3">
            <div class="card service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-icon"><i class="fas fa-bullseye"></i></div>
                <h3 class="card-title">Professionnalisme</h3>
                <p class="card-text">Chaque membre est sélectionné pour son expertise et son engagement envers l'excellence.</p>
            </div>
            <div class="card service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-icon"><i class="fas fa-headset"></i></div>
                <h3 class="card-title">Disponibilité</h3>
                <p class="card-text">Nous restons à l'écoute de nos clients pour répondre rapidement à leurs besoins.</p>
            </div>
            <div class="card service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-icon"><i class="fas fa-trophy"></i></div>
                <h3 class="card-title">Résultats</h3>
                <p class="card-text">Notre priorité : des résultats concrets et mesurables pour chaque projet confié.</p>
            </div>
        </div>
    </div>
</section>

@endsection
