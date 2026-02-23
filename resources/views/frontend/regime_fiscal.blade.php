@extends('layouts.front')

@section('title', 'Régime Fiscal et Aspects Légaux - ECO+HOLDING')

@section('content')

{{-- ══════════ HERO ══════════ --}}
<section class="hero" style="background: linear-gradient(135deg, var(--couleur-bleu-principal) 0%, var(--couleur-bleu-clair) 100%); color: white;">
    <div class="container hero-container">
        <div class="hero-content" data-aos="fade-up">
            <h1 class="hero-title" style="color: white">RÉGIME FISCAL ET ASPECTS LÉGAUX</h1>
            <p class="hero-subtitle" style="color: rgba(255, 255, 255, 0.9); max-width: 800px">
                Réponses aux questions essentielles pour la création et la gestion de votre entreprise en Côte d'Ivoire
            </p>
        </div>
    </div>
</section>

{{-- ══════════ CONTENU PRINCIPAL ══════════ --}}
<section class="section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small" style="color: var(--couleur-rouge-accent)">INFORMATIONS ESSENTIELLES</span>
            <h2>Réponses à vos questions sur la fiscalité et la gestion d'entreprise</h2>
            <p>Comprendre les aspects fiscaux et légaux pour une création d'entreprise réussie</p>
        </div>

        {{-- Question 1 --}}
        <div class="card" style="margin-bottom: var(--espace-xl)" data-aos="fade-up">
            <div class="card-header" style="background: var(--couleur-bleu-pale); padding: var(--espace-lg); border-radius: var(--rayon-lg) var(--rayon-lg) 0 0;">
                <h3 style="color: var(--couleur-bleu-principal); margin: 0">
                    <i class="fas fa-question-circle" style="margin-right: var(--espace-sm)"></i>
                    Quel régime fiscal convient à l'objet de mon entreprise ?
                </h3>
            </div>
            <div class="card-body" style="padding: var(--espace-xl)">
                <p>Le choix du régime fiscal dépend de la nature, de la taille et du chiffre d'affaires de votre entreprise :</p>
                <div class="grid grid-2" style="gap: var(--espace-lg); margin-top: var(--espace-lg)">
                    <div>
                        <h4 style="color: var(--couleur-rouge-accent); margin-bottom: var(--espace-md)">
                            <i class="fas fa-building"></i> Régime Simplifié d'Imposition (RSI)
                        </h4>
                        <p><strong>Pour qui ?</strong> PME avec CA ≤ 50 millions FCFA</p>
                        <ul style="margin-top: var(--espace-sm)">
                            <li>Activités commerciales, artisanales, industrielles</li>
                            <li>Professions libérales</li>
                            <li>Entreprises individuelles</li>
                        </ul>
                    </div>
                    <div>
                        <h4 style="color: var(--couleur-rouge-accent); margin-bottom: var(--espace-md)">
                            <i class="fas fa-chart-line"></i> Régime du Réel
                        </h4>
                        <p><strong>Pour qui ?</strong> Grandes entreprises ou CA > 50 millions FCFA</p>
                        <ul style="margin-top: var(--espace-sm)">
                            <li>Imposition sur bénéfices réels</li>
                            <li>Obligation de comptabilité</li>
                            <li>Plus de déductions possibles</li>
                        </ul>
                    </div>
                </div>
                <div style="background: var(--couleur-bleu-pale); padding: var(--espace-lg); border-radius: var(--rayon-md); margin-top: var(--espace-lg)">
                    <p style="margin: 0">
                        <strong>Conseil ECO+HOLDING :</strong> Nous vous aidons à choisir le régime fiscal optimal selon votre secteur d'activité et vos objectifs de développement.
                    </p>
                </div>
            </div>
        </div>

        {{-- Question 2 --}}
        <div class="card" style="margin-bottom: var(--espace-xl)" data-aos="fade-up" data-aos-delay="100">
            <div class="card-header" style="background: var(--couleur-bleu-pale); padding: var(--espace-lg); border-radius: var(--rayon-lg) var(--rayon-lg) 0 0;">
                <h3 style="color: var(--couleur-bleu-principal); margin: 0">
                    <i class="fas fa-question-circle" style="margin-right: var(--espace-sm)"></i>
                    Que comprend ce régime fiscal ?
                </h3>
            </div>
            <div class="card-body" style="padding: var(--espace-xl)">
                <div class="grid grid-2" style="gap: var(--espace-lg)">
                    <div>
                        <h4 style="color: var(--couleur-rouge-accent); margin-bottom: var(--espace-md)">
                            Régime Simplifié d'Imposition (RSI)
                        </h4>
                        <ul>
                            <li><strong>Impôt sur les sociétés (IS) :</strong> 25% sur le revenu imposable</li>
                            <li><strong>Contribution des patentes :</strong> Fixe selon le secteur</li>
                            <li><strong>TVA :</strong> 18% sur ventes (si CA > 10 millions FCFA)</li>
                            <li><strong>Retenues à la source :</strong> 5,5% sur certains revenus</li>
                        </ul>
                    </div>
                    <div>
                        <h4 style="color: var(--couleur-rouge-accent); margin-bottom: var(--espace-md)">
                            Régime du Réel
                        </h4>
                        <ul>
                            <li><strong>IS :</strong> 25% sur bénéfices après déductions</li>
                            <li><strong>TVA :</strong> 18% avec droit à déduction</li>
                            <li><strong>Impôts locaux :</strong> CFE, CVAE</li>
                            <li><strong>Comptabilité obligatoire</strong></li>
                        </ul>
                    </div>
                </div>
                <div style="background: var(--couleur-gris-clair); padding: var(--espace-lg); border-radius: var(--rayon-md); margin-top: var(--espace-lg)">
                    <p style="margin: 0">
                        <strong>Note :</strong> Tous les régimes incluent les charges sociales (CNPS, retraite) et les impôts locaux.
                    </p>
                </div>
            </div>
        </div>

        {{-- Question 3 --}}
        <div class="card" style="margin-bottom: var(--espace-xl)" data-aos="fade-up" data-aos-delay="200">
            <div class="card-header" style="background: var(--couleur-bleu-pale); padding: var(--espace-lg); border-radius: var(--rayon-lg) var(--rayon-lg) 0 0;">
                <h3 style="color: var(--couleur-bleu-principal); margin: 0">
                    <i class="fas fa-question-circle" style="margin-right: var(--espace-sm)"></i>
                    Combien devrais-je payer en impôts et à quelles échéances ?
                </h3>
            </div>
            <div class="card-body" style="padding: var(--espace-xl)">
                <div class="grid grid-2" style="gap: var(--espace-lg)">
                    <div>
                        <h4 style="color: var(--couleur-rouge-accent); margin-bottom: var(--espace-md)">
                            <i class="fas fa-calendar-alt"></i> Échéances fiscales
                        </h4>
                        <ul>
                            <li><strong>TVA :</strong> Mensuelle (15 du mois suivant)</li>
                            <li><strong>IS :</strong> Trimestrielle (avril, juillet, octobre, janvier)</li>
                            <li><strong>Retenues à la source :</strong> Mensuelle</li>
                            <li><strong>Patente :</strong> Annuelle (mars)</li>
                        </ul>
                    </div>
                    <div>
                        <h4 style="color: var(--couleur-rouge-accent); margin-bottom: var(--espace-md)">
                            <i class="fas fa-coins"></i> Montants approximatifs
                        </h4>
                        <ul>
                            <li><strong>Petite entreprise :</strong> 500 000 - 2 millions FCFA/an</li>
                            <li><strong>PME moyenne :</strong> 2 - 10 millions FCFA/an</li>
                            <li><strong>Grande entreprise :</strong> > 10 millions FCFA/an</li>
                            <li><strong>Charges sociales :</strong> 15-20% de la masse salariale</li>
                        </ul>
                    </div>
                </div>
                <div style="background: var(--couleur-bleu-pale); padding: var(--espace-lg); border-radius: var(--rayon-md); margin-top: var(--espace-lg)">
                    <p style="margin: 0">
                        <strong>Important :</strong> Les montants varient selon le CA, les charges déductibles et les exonérations fiscales applicables.
                    </p>
                </div>
            </div>
        </div>

        {{-- Question 4 --}}
        <div class="card" style="margin-bottom: var(--espace-xl)" data-aos="fade-up" data-aos-delay="300">
            <div class="card-header" style="background: var(--couleur-bleu-pale); padding: var(--espace-lg); border-radius: var(--rayon-lg) var(--rayon-lg) 0 0;">
                <h3 style="color: var(--couleur-bleu-principal); margin: 0">
                    <i class="fas fa-question-circle" style="margin-right: var(--espace-sm)"></i>
                    À quoi sert mon numéro CNPS ?
                </h3>
            </div>
            <div class="card-body" style="padding: var(--espace-xl)">
                <p>Le numéro CNPS (Caisse Nationale de Prévoyance Sociale) est essentiel pour :</p>
                <div class="grid grid-2" style="gap: var(--espace-lg); margin-top: var(--espace-lg)">
                    <div>
                        <h4 style="color: var(--couleur-rouge-accent); margin-bottom: var(--espace-md)">
                            <i class="fas fa-users"></i> Protection sociale
                        </h4>
                        <ul>
                            <li>Couverture maladie pour les employés</li>
                            <li>Allocations familiales</li>
                            <li>Indemnités de maternité</li>
                            <li>Prestations d'invalidité</li>
                        </ul>
                    </div>
                    <div>
                        <h4 style="color: var(--couleur-rouge-accent); margin-bottom: var(--espace-md)">
                            <i class="fas fa-hand-holding-heart"></i> Retraite et prévoyance
                        </h4>
                        <ul>
                            <li>Pension de retraite</li>
                            <li>Capital décès</li>
                            <li>Assurance vieillesse</li>
                            <li>Protection sociale complémentaire</li>
                        </ul>
                    </div>
                </div>
                <div style="background: var(--couleur-gris-clair); padding: var(--espace-lg); border-radius: var(--rayon-md); margin-top: var(--espace-lg)">
                    <p style="margin: 0">
                        <strong>Obligations :</strong> Affiliation obligatoire pour tout employeur. Cotisations : 5,5% (employeur) + 3,5% (salarié).
                    </p>
                </div>
            </div>
        </div>

        {{-- Question 5 --}}
        <div class="card" style="margin-bottom: var(--espace-xl)" data-aos="fade-up" data-aos-delay="400">
            <div class="card-header" style="background: var(--couleur-bleu-pale); padding: var(--espace-lg); border-radius: var(--rayon-lg) var(--rayon-lg) 0 0;">
                <h3 style="color: var(--couleur-bleu-principal); margin: 0">
                    <i class="fas fa-question-circle" style="margin-right: var(--espace-sm)"></i>
                    Quels sont les pouvoirs du gérant ?
                </h3>
            </div>
            <div class="card-body" style="padding: var(--espace-xl)">
                <p>Le gérant représente l'entreprise et exerce tous les pouvoirs nécessaires à sa gestion :</p>
                <div style="margin-top: var(--espace-lg)">
                    <h4 style="color: var(--couleur-rouge-accent); margin-bottom: var(--espace-md)">
                        <i class="fas fa-gavel"></i> Pouvoirs légaux
                    </h4>
                    <div class="grid grid-2" style="gap: var(--espace-lg)">
                        <ul>
                            <li>Représenter la société en justice</li>
                            <li>Signer contrats et conventions</li>
                            <li>Engager et licencier le personnel</li>
                            <li>Gérer les biens sociaux</li>
                        </ul>
                        <ul>
                            <li>Ouvrir comptes bancaires</li>
                            <li>Acquérir et aliéner biens</li>
                            <li>Conclure baux et emprunts</li>
                            <li>Accomplir formalités administratives</li>
                        </ul>
                    </div>
                </div>
                <div style="background: var(--couleur-bleu-pale); padding: var(--espace-lg); border-radius: var(--rayon-md); margin-top: var(--espace-lg)">
                    <p style="margin: 0">
                        <strong>Limites :</strong> Le gérant ne peut agir au-delà de l'objet social. Certaines décisions nécessitent l'accord des associés.
                    </p>
                </div>
            </div>
        </div>

        {{-- Question 6 --}}
        <div class="card" style="margin-bottom: var(--espace-xl)" data-aos="fade-up" data-aos-delay="500">
            <div class="card-header" style="background: var(--couleur-bleu-pale); padding: var(--espace-lg); border-radius: var(--rayon-lg) var(--rayon-lg) 0 0;">
                <h3 style="color: var(--couleur-bleu-principal); margin: 0">
                    <i class="fas fa-question-circle" style="margin-right: var(--espace-sm)"></i>
                    Quelle est la durée de son mandat ?
                </h3>
            </div>
            <div class="card-body" style="padding: var(--espace-xl)">
                <div class="grid grid-2" style="gap: var(--espace-lg)">
                    <div>
                        <h4 style="color: var(--couleur-rouge-accent); margin-bottom: var(--espace-md)">
                            <i class="fas fa-clock"></i> Durée du mandat
                        </h4>
                        <ul>
                            <li><strong>SARL :</strong> 1 à 3 ans (renouvelable)</li>
                            <li><strong>SAS :</strong> 1 à 6 ans (renouvelable)</li>
                            <li><strong>SA :</strong> 3 à 6 ans (renouvelable)</li>
                            <li><strong>Entreprise individuelle :</strong> Indéterminée</li>
                        </ul>
                    </div>
                    <div>
                        <h4 style="color: var(--couleur-rouge-accent); margin-bottom: var(--espace-md)">
                            <i class="fas fa-sync-alt"></i> Renouvellement
                        </h4>
                        <ul>
                            <li>Révocable à tout moment</li>
                            <li>Par décision collective des associés</li>
                            <li>Avec ou sans motif</li>
                            <li>Possibilité de clause de non-concurrence</li>
                        </ul>
                    </div>
                </div>
                <div style="background: var(--couleur-gris-clair); padding: var(--espace-lg); border-radius: var(--rayon-md); margin-top: var(--espace-lg)">
                    <p style="margin: 0">
                        <strong>Note :</strong> La durée exacte dépend des statuts de la société. Le mandat peut être renouvelé indéfiniment.
                    </p>
                </div>
            </div>
        </div>

        {{-- Call to Action --}}
        <div class="card" style="background: linear-gradient(135deg, var(--couleur-rouge-accent) 0%, var(--couleur-rouge-hover) 100%); color: white; text-align: center;" data-aos="fade-up">
            <div class="card-body" style="padding: var(--espace-2xl)">
                <h3 style="color: white; margin-bottom: var(--espace-lg)">
                    Besoin d'accompagnement personnalisé ?
                </h3>
                <p style="font-size: 1.125rem; margin-bottom: var(--espace-xl); color: rgba(255, 255, 255, 0.9)">
                    Nos experts en fiscalité et droit des affaires vous guident dans toutes vos démarches.
                </p>
                <div style="display: flex; gap: var(--espace-md); justify-content: center; flex-wrap: wrap;">
                    <a href="{{ route('services') }}" class="btn btn-large" style="background: white; color: var(--couleur-rouge-accent); border: 2px solid white;">
                        <i class="fas fa-info-circle"></i> Nos Services
                    </a>
                    <a href="{{ route('home') }}#contact" class="btn btn-large" style="background: rgba(255, 255, 255, 0.2); color: white; border: 2px solid white;">
                        <i class="fas fa-paper-plane"></i> Contactez-nous
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
