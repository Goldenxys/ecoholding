@extends('layouts.front')

@section('title', 'Présentation — ECO+HOLDING')

@section('content')

<section class="hero hero--page" style="background-image:url('{{ asset('images/eco.jpeg') }}')">
    <div class="hero__overlay"></div>
    <div class="container hero__content">
        <h1 class="hero__title">Qui sommes-nous ?</h1>
        <p class="hero__subtitle">ECO+HOLDING est un cabinet de gestion d'affaires et d'intermédiation basé à Abidjan, Côte d'Ivoire.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small">Notre histoire</span>
            <h2>Un Groupe au Service de l'Afrique</h2>
        </div>
        <div style="max-width:800px; margin:0 auto;" data-aos="fade-up" data-aos-delay="200">
            <p class="text-center">Fondé avec la vision de contribuer au développement économique de la Côte d'Ivoire et de l'Afrique, ECO+HOLDING s'est imposé comme un acteur incontournable dans les secteurs de l'immobilier, de la logistique et du conseil aux entreprises.</p>
            <p class="text-center">Notre approche repose sur l'excellence, l'intégrité et l'innovation. Nous accompagnons nos clients dans la réalisation de leurs projets les plus ambitieux.</p>
        </div>
    </div>
</section>

<section class="section" style="background: var(--couleur-gris-clair);">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small">Ce qui nous définit</span>
            <h2>Nos Valeurs</h2>
        </div>
        <div class="grid grid-2">
            <div class="card value-card" data-aos="fade-right">
                <div class="value-icon"><i class="fas fa-gem"></i></div>
                <div class="value-content">
                    <h3 class="card-title">Excellence</h3>
                    <p class="card-text">Nous visons l'excellence dans chaque projet et chaque interaction avec nos partenaires.</p>
                </div>
            </div>
            <div class="card value-card" data-aos="fade-left">
                <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="value-content">
                    <h3 class="card-title">Intégrité</h3>
                    <p class="card-text">La transparence et l'honnêteté sont au cœur de toutes nos opérations.</p>
                </div>
            </div>
            <div class="card value-card" data-aos="fade-right">
                <div class="value-icon"><i class="fas fa-lightbulb"></i></div>
                <div class="value-content">
                    <h3 class="card-title">Innovation</h3>
                    <p class="card-text">Nous adoptons des solutions modernes pour répondre aux défis de demain.</p>
                </div>
            </div>
            <div class="card value-card" data-aos="fade-left">
                <div class="value-icon"><i class="fas fa-leaf"></i></div>
                <div class="value-content">
                    <h3 class="card-title">Durabilité</h3>
                    <p class="card-text">Nos projets intègrent une dimension environnementale et sociale pour un impact positif.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
