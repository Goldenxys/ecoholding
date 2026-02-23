@extends('layouts.front')

@section('title', 'Vision & Valeurs — ECO+HOLDING')

@section('content')

<section class="hero hero--page" style="background-image:url('{{ asset('images/hero-vision.jpg') }}')">
    <div class="hero__overlay"></div>
    <div class="container hero__content">
        <h1 class="hero__title">Notre Vision & Nos Valeurs</h1>
        <p class="hero__subtitle">Bâtir un avenir prospère pour l'Afrique à travers l'investissement responsable.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small">Notre ambition</span>
            <h2>Notre Vision</h2>
        </div>
        <div style="max-width:800px; margin:0 auto;" data-aos="fade-up" data-aos-delay="200">
            <p class="text-center" style="font-size:1.2rem;">Devenir le groupe de référence en Afrique dans les secteurs de l'immobilier de prestige, de la logistique et du conseil aux entreprises. Nous croyons en un développement économique inclusif et durable, porté par l'excellence et l'innovation.</p>
        </div>
    </div>
</section>

<section class="section" style="background: var(--couleur-gris-clair);">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small">Ce qui nous guide</span>
            <h2>Nos Valeurs Fondamentales</h2>
        </div>
        <div class="grid grid-2">
            <div class="card value-card" data-aos="fade-right" data-aos-delay="100">
                <div class="value-icon"><i class="fas fa-gem"></i></div>
                <div class="value-content">
                    <h3 class="card-title">Excellence</h3>
                    <p class="card-text">Nous recherchons la qualité supérieure dans chaque service, chaque projet et chaque relation d'affaires.</p>
                </div>
            </div>
            <div class="card value-card" data-aos="fade-left" data-aos-delay="200">
                <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="value-content">
                    <h3 class="card-title">Intégrité</h3>
                    <p class="card-text">La transparence, l'honnêteté et l'éthique guident toutes nos actions et décisions.</p>
                </div>
            </div>
            <div class="card value-card" data-aos="fade-right" data-aos-delay="300">
                <div class="value-icon"><i class="fas fa-lightbulb"></i></div>
                <div class="value-content">
                    <h3 class="card-title">Innovation</h3>
                    <p class="card-text">Nous adoptons les technologies et méthodes modernes pour rester à la pointe de nos secteurs.</p>
                </div>
            </div>
            <div class="card value-card" data-aos="fade-left" data-aos-delay="400">
                <div class="value-icon"><i class="fas fa-leaf"></i></div>
                <div class="value-content">
                    <h3 class="card-title">Durabilité</h3>
                    <p class="card-text">Nos projets intègrent une dimension environnementale et sociale pour un impact positif à long terme.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
