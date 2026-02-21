@extends('layouts.front')

@section('title', 'Vision & Valeurs — ECO+HOLDING')

@section('content')

<section class="hero" style="background-image:url('{{ asset('images/hero-vision.jpg') }}')">
    <div class="hero-content">
        <h1>Notre Vision & Nos Valeurs</h1>
        <p>Bâtir un avenir prospère pour l'Afrique à travers l'investissement responsable.</p>
    </div>
</section>

<section class="section">
    <h2 class="section-title">Notre Vision</h2>
    <hr class="section-divider">
    <p style="max-width:800px; margin:0 auto; text-align:center; color:var(--gray); font-size:1.05rem;">
        Devenir le groupe de référence en Afrique centrale dans les secteurs de l'immobilier de prestige,
        de la logistique et du conseil aux entreprises. Nous croyons en un développement économique
        inclusif et durable, porté par l'excellence et l'innovation.
    </p>
</section>

<section style="background:var(--light); padding:3rem 2rem;">
    <div class="section" style="padding-top:0; padding-bottom:0;">
        <h2 class="section-title">Nos Valeurs Fondamentales</h2>
        <hr class="section-divider">
        <div class="features">
            <div class="feature">
                <div class="feature-icon">💎</div>
                <h3>Excellence</h3>
                <p>Nous recherchons la qualité supérieure dans chaque service, chaque projet et chaque relation d'affaires.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🤝</div>
                <h3>Intégrité</h3>
                <p>La transparence, l'honnêteté et l'éthique guident toutes nos actions et décisions.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🚀</div>
                <h3>Innovation</h3>
                <p>Nous adoptons les technologies et méthodes modernes pour rester à la pointe de nos secteurs.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🌱</div>
                <h3>Durabilité</h3>
                <p>Nos projets intègrent une dimension environnementale et sociale pour un impact positif à long terme.</p>
            </div>
        </div>
    </div>
</section>

@endsection
