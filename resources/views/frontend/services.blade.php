@extends('layouts.front')

@section('title', 'Services - ECO+HOLDING')

@section('content')

{{-- ══════════ HERO ══════════ --}}
<section class="hero hero--page" style="background-image: url('{{ asset('images/hero-vision.jpeg') }}');">
    <div class="hero__overlay"></div>
    <div class="container hero__content" data-aos="fade-up">
        <h1 class="hero__title">Nos Services</h1>
        <p class="hero__subtitle">Conseil fiscal, financier, juridique, intermédiation et création d'entreprise</p>
    </div>
</section>

{{-- ══════════ SERVICES PRINCIPAUX ══════════ --}}
<section class="section container" id="services">
    <div class="grid grid-3">
        <div class="card card--feature" data-aos="fade-up">
            <div class="card-icon"><i class="fas fa-file-invoice-dollar"></i></div>
            <h3>Conseil fiscal</h3>
            <p>Optimisation fiscale et stratégie de conformité.</p>
        </div>
        <div class="card card--feature" data-aos="fade-up" data-aos-delay="100">
            <div class="card-icon"><i class="fas fa-chart-line"></i></div>
            <h3>Financier & gestion</h3>
            <p>Structuration financière, gestion, pilotage d'affaires.</p>
        </div>
        <div class="card card--feature" data-aos="fade-up" data-aos-delay="200">
            <div class="card-icon"><i class="fas fa-building"></i></div>
            <h3>Création d'entreprise</h3>
            <p>Constitution, statuts, formalités administratives.</p>
        </div>
        <div class="card card--feature" data-aos="fade-up">
            <div class="card-icon"><i class="fas fa-handshake-simple"></i></div>
            <h3>Intermédiation</h3>
            <p>Mise en relation, facilitation d'opérations et partenariats.</p>
        </div>
        <div class="card card--feature" data-aos="fade-up" data-aos-delay="100">
            <div class="card-icon"><i class="fas fa-calculator"></i></div>
            <h3>Suivi comptable</h3>
            <p>Accompagnement comptable adapté aux besoins.</p>
        </div>
        <div class="card card--feature" data-aos="fade-up" data-aos-delay="200">
            <div class="card-icon"><i class="fas fa-scale-balanced"></i></div>
            <h3>Conseil juridique</h3>
            <p>Assistance légale liée aux activités et à la création d'entreprise.</p>
        </div>
    </div>

    {{-- Services pratiques --}}
    <h2 class="section-subtitle mt-xl" style="text-align:center; font-size:1.5rem; font-weight:700; color:var(--couleur-bleu-principal);">Services pratiques (création d'entreprise)</h2>
    <div class="grid grid-3">
        <div class="card card--feature" data-aos="fade-up">
            <div class="card-icon"><i class="fas fa-file-signature"></i></div>
            <h4>Statuts rédigés sous 24h</h4>
        </div>
        <div class="card card--feature" data-aos="fade-up" data-aos-delay="100">
            <div class="card-icon"><i class="fas fa-file-circle-check"></i></div>
            <h4>DSV sous 24h</h4>
        </div>
        <div class="card card--feature" data-aos="fade-up" data-aos-delay="200">
            <div class="card-icon"><i class="fas fa-file-contract"></i></div>
            <h4>Contrat de bail & documents</h4>
        </div>
        <div class="card card--feature" data-aos="fade-up">
            <div class="card-icon"><i class="fas fa-newspaper"></i></div>
            <h4>Annonce légale (optionnelle)</h4>
        </div>
        <div class="card card--feature" data-aos="fade-up" data-aos-delay="100">
            <div class="card-icon"><i class="fas fa-id-card"></i></div>
            <h4>RCCM, IDU, DFE, N° CC, Impôts</h4>
        </div>
        <div class="card card--feature" data-aos="fade-up" data-aos-delay="200">
            <div class="card-icon"><i class="fas fa-book"></i></div>
            <h4>Publication JO (optionnelle)</h4>
        </div>
        <div class="card card--feature" data-aos="fade-up">
            <div class="card-icon"><i class="fas fa-location-dot"></i></div>
            <h4>Domiciliation (optionnelle)</h4>
        </div>
    </div>
</section>

{{-- ══════════ SECTION CREATION D'ENTREPRISE PREMIUM ══════════ --}}
<section class="section" style="background: linear-gradient(135deg, var(--couleur-bleu-fonce) 0%, var(--couleur-bleu-principal) 100%); color: white;">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small" style="color: var(--couleur-rouge-accent)">SERVICE PREMIUM</span>
            <h2 style="color: white;">CRÉATION D'ENTREPRISE EN CÔTE D'IVOIRE</h2>
        </div>

        <div class="card" style="background: rgba(255, 255, 255, 0.95); padding: var(--espace-2xl)" data-aos="fade-up">

            {{-- Introduction --}}
            <div style="margin-bottom: var(--espace-xl)">
                <h3 style="color: var(--couleur-bleu-principal); margin-bottom: var(--espace-md)">
                    Ne confiez pas la création de votre entreprise à n'importe qui
                </h3>
                <p style="font-size: 1.125rem; line-height: 1.8; color: var(--couleur-texte-secondaire)">
                    Avant de faire appel à une structure, posez les bonnes questions :
                </p>
            </div>

            {{-- Questions --}}
            <div class="grid grid-2" style="margin-bottom: var(--espace-xl)">
                <div>
                    <ul style="list-style: none; padding: 0">
                        <li style="margin-bottom: var(--espace-md); display: flex; gap: var(--espace-sm)">
                            <i class="fas fa-check-circle" style="color: var(--couleur-rouge-accent); font-size: 1.25rem; margin-top: 2px"></i>
                            <span><strong>Quel régime fiscal</strong> convient à l'objet de mon entreprise ?</span>
                        </li>
                        <li style="margin-bottom: var(--espace-md); display: flex; gap: var(--espace-sm)">
                            <i class="fas fa-check-circle" style="color: var(--couleur-rouge-accent); font-size: 1.25rem; margin-top: 2px"></i>
                            <span><strong>Que comprend</strong> ce régime fiscal ?</span>
                        </li>
                        <li style="margin-bottom: var(--espace-md); display: flex; gap: var(--espace-sm)">
                            <i class="fas fa-check-circle" style="color: var(--couleur-rouge-accent); font-size: 1.25rem; margin-top: 2px"></i>
                            <span><strong>Combien devrais-je payer</strong> en impôts et à quelles échéances ?</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul style="list-style: none; padding: 0">
                        <li style="margin-bottom: var(--espace-md); display: flex; gap: var(--espace-sm)">
                            <i class="fas fa-check-circle" style="color: var(--couleur-rouge-accent); font-size: 1.25rem; margin-top: 2px"></i>
                            <span><strong>À quoi sert</strong> mon numéro CNPS ?</span>
                        </li>
                        <li style="margin-bottom: var(--espace-md); display: flex; gap: var(--espace-sm)">
                            <i class="fas fa-check-circle" style="color: var(--couleur-rouge-accent); font-size: 1.25rem; margin-top: 2px"></i>
                            <span><strong>Quels sont les pouvoirs</strong> du gérant ?</span>
                        </li>
                        <li style="margin-bottom: var(--espace-md); display: flex; gap: var(--espace-sm)">
                            <i class="fas fa-check-circle" style="color: var(--couleur-rouge-accent); font-size: 1.25rem; margin-top: 2px"></i>
                            <span><strong>Quelle est la durée</strong> de son mandat ?</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Ce que vous obtenez --}}
            <div style="background: var(--couleur-bleu-pale); padding: var(--espace-xl); border-radius: var(--rayon-lg); margin-bottom: var(--espace-xl)">
                <h3 style="color: var(--couleur-bleu-principal); margin-bottom: var(--espace-md)">
                    Confiez votre projet à nos juristes formalistes et fiscalistes expérimentés
                </h3>
                <p style="font-size: 1.125rem; font-weight: 600; color: var(--couleur-bleu-principal); margin-bottom: var(--espace-md)">
                    Avec nous, vous obtenez en un temps record :
                </p>
            </div>

            <div class="grid grid-3">
                <div class="card" style="border-left: 4px solid var(--couleur-rouge-accent)">
                    <h4 style="color: var(--couleur-bleu-principal); margin-bottom: var(--espace-sm)">
                        <i class="fas fa-file-alt"></i> Documents juridiques
                    </h4>
                    <ul style="list-style: none; padding: 0; color: var(--couleur-texte-secondaire)">
                        <li>Statuts rédigés sous 24h</li>
                        <li>DSV prête sous 24h</li>
                        <li>Avis de constitution</li>
                        <li>Annonce légale</li>
                    </ul>
                </div>
                <div class="card" style="border-left: 4px solid var(--couleur-rouge-accent)">
                    <h4 style="color: var(--couleur-bleu-principal); margin-bottom: var(--espace-sm)">
                        <i class="fas fa-stamp"></i> Enregistrements officiels
                    </h4>
                    <ul style="list-style: none; padding: 0; color: var(--couleur-texte-secondaire)">
                        <li>Registre de commerce (RCCM)</li>
                        <li>IDU + annexes</li>
                        <li>DFE, N° CC</li>
                        <li>Publication JO (optionnel)</li>
                    </ul>
                </div>
                <div class="card" style="border-left: 4px solid var(--couleur-rouge-accent)">
                    <h4 style="color: var(--couleur-bleu-principal); margin-bottom: var(--espace-sm)">
                        <i class="fas fa-building"></i> Services complémentaires
                    </h4>
                    <ul style="list-style: none; padding: 0; color: var(--couleur-texte-secondaire)">
                        <li>Contrat de bail enregistré</li>
                        <li>Domiciliation</li>
                        <li>Rattachement aux impôts</li>
                        <li>Conseil fiscal personnalisé</li>
                    </ul>
                </div>
            </div>

            {{-- Bandeau contact --}}
            <div style="background: linear-gradient(135deg, var(--couleur-rouge-accent) 0%, var(--couleur-rouge-hover) 100%); color: white; padding: var(--espace-xl); border-radius: var(--rayon-lg); text-align: center; margin-top: var(--espace-xl)">
                <h3 style="color: white; margin-bottom: var(--espace-md)">Retrouvez-nous</h3>
                <p style="font-size: 1.125rem; margin-bottom: var(--espace-sm); color: white">
                    <i class="fas fa-map-marker-alt"></i> <strong>Adresse :</strong> Cocody Riviera Palmeraie, non loin du carrefour Guiro
                </p>
                <p style="font-size: 1.125rem; margin-bottom: var(--espace-md); color: white">
                    <i class="fas fa-phone"></i> <strong>Contacts :</strong> (+225) 05 04 47 72 68 / 07 05 92 87 80
                </p>
                <p style="font-size: 1rem; font-weight: 600; margin: 0; color: white">
                    ECO Plus Holding – La fiscalité et la formalisation d'entreprise, notre métier.
                </p>
            </div>

            <div style="text-align: center; margin-top: var(--espace-xl)">
                <a href="{{ route('home') }}#contact" class="btn btn-primary btn-large">
                    <i class="fas fa-paper-plane"></i> Créer mon entreprise maintenant
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Hashtags --}}
<section class="section container">
    <p style="text-align: center; color: var(--couleur-gris-fonce); font-size: 0.875rem">
        #ECOplusholding #Fiscalité #Créationdentreprise #EntreprendreCI #GestionFinancière
    </p>
</section>

@endsection
