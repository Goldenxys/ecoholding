@extends('layouts.front')

@section('title', 'Présentation — ECO+HOLDING')

@section('content')

<section class="hero" style="background-image:url('{{ asset('images/eco.jpeg') }}')">
    <div class="hero-content">
        <h1>Qui sommes-nous ?</h1>
        <p>ECO+HOLDING est un groupe multi-services camerounais spécialisé dans l'investissement, l'immobilier de prestige et la logistique.</p>
    </div>
</section>

<section class="section">
    <h2 class="section-title">Notre Histoire</h2>
    <hr class="section-divider">
    <p style="max-width:800px; margin:0 auto; text-align:center; color:var(--gray);">
        Fondé avec la vision de contribuer au développement économique du Cameroun et de l'Afrique,
        ECO+HOLDING s'est imposé comme un acteur incontournable dans les secteurs de l'immobilier,
        de la logistique et du conseil aux entreprises. Notre approche repose sur l'excellence,
        l'intégrité et l'innovation.
    </p>
</section>

<section style="background:var(--light); padding:3rem 2rem;">
    <div class="section" style="padding-top:0; padding-bottom:0;">
        <h2 class="section-title">Nos Valeurs</h2>
        <hr class="section-divider">
        <div class="features">
            <div class="feature">
                <div class="feature-icon">💎</div>
                <h3>Excellence</h3>
                <p>Nous visons l'excellence dans chaque projet et chaque interaction avec nos partenaires.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🤝</div>
                <h3>Intégrité</h3>
                <p>La transparence et l'honnêteté sont au cœur de toutes nos opérations.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🚀</div>
                <h3>Innovation</h3>
                <p>Nous adoptons des solutions modernes pour répondre aux défis de demain.</p>
            </div>
        </div>
    </div>
</section>

@endsection
