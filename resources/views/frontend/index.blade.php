@extends('layouts.front')

@section('title', 'ECO+HOLDING - Nous facilitons vos affaires')

@section('content')

{{-- ══════════ HERO ══════════ --}}
<section class="hero" id="accueil">
    <div class="container hero-container">
        <div class="hero-content">
            <span class="hero-badge">Cabinet de Gestion d'Affaires</span>
            <h1 class="hero-title">
                Nous facilitons<br>
                vos <span class="highlight">affaires</span>
            </h1>
            <p class="hero-subtitle">
                ECO+HOLDING, votre partenaire de confiance pour la gestion d'affaires,
                l'immobilier de prestige et la logistique en Côte d'Ivoire et en Afrique.
            </p>
            <div class="hero-buttons">
                <a href="{{ route('services') }}" class="btn btn-accent btn-large">
                    <i class="fas fa-arrow-right"></i> Nos Services
                </a>
                <a href="#contact" class="btn btn-outline-white btn-large">
                    <i class="fas fa-envelope"></i> Nous Contacter
                </a>
            </div>
        </div>
        <div class="hero-visual">
            <img src="{{ asset('images/hero-vision.jpg') }}" alt="ECO+HOLDING" class="hero-image">
        </div>
    </div>
</section>

{{-- ══════════ SERVICES ══════════ --}}
<section class="section" id="services">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small">Ce que nous offrons</span>
            <h2>Nos Domaines d'Expertise</h2>
            <p>Des solutions intégrées et sur mesure pour accompagner vos projets les plus ambitieux.</p>
        </div>

        <div class="grid grid-3">
            <div class="card service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-icon"><i class="fas fa-briefcase"></i></div>
                <h3 class="card-title">Gestion d'Affaires</h3>
                <p class="card-text">Intermédiation commerciale, conseil stratégique et accompagnement opérationnel pour développer vos activités.</p>
                <a href="{{ route('services') }}" class="btn btn-secondary btn-small mt-md">En savoir plus</a>
            </div>

            <div class="card service-card featured" data-aos="fade-up" data-aos-delay="200">
                <div class="card-icon"><i class="fas fa-building"></i></div>
                <h3 class="card-title">Prestige Immobilier</h3>
                <p class="card-text">Conseil, gestion locative et vente de biens immobiliers haut de gamme en Côte d'Ivoire et en Afrique.</p>
                <a href="{{ route('prestige-immobilier') }}" class="btn btn-secondary btn-small mt-md">En savoir plus</a>
            </div>

            <div class="card service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-icon"><i class="fas fa-truck"></i></div>
                <h3 class="card-title">Eco+Trans-Logistique</h3>
                <p class="card-text">Import-export, transport de marchandises et solutions logistiques complètes pour vos échanges commerciaux.</p>
                <a href="{{ route('translogistique') }}" class="btn btn-secondary btn-small mt-md">En savoir plus</a>
            </div>
        </div>

        <div class="grid grid-3 mt-lg">
            <div class="card service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <h3 class="card-title">Conseil Fiscal</h3>
                <p class="card-text">Optimisation fiscale et accompagnement réglementaire pour entreprises et investisseurs.</p>
                <a href="{{ route('regime-fiscal') }}" class="btn btn-secondary btn-small mt-md">En savoir plus</a>
            </div>

            <div class="card service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-icon"><i class="fas fa-rocket"></i></div>
                <h3 class="card-title">Création d'Entreprise</h3>
                <p class="card-text">Accompagnement de A à Z pour la création et l'immatriculation de votre entreprise en Côte d'Ivoire.</p>
                <a href="{{ route('services') }}" class="btn btn-secondary btn-small mt-md">En savoir plus</a>
            </div>

            <div class="card service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-icon"><i class="fas fa-handshake"></i></div>
                <h3 class="card-title">Intermédiation</h3>
                <p class="card-text">Mise en relation d'affaires, facilitation de partenariats et négociation commerciale.</p>
                <a href="{{ route('services') }}" class="btn btn-secondary btn-small mt-md">En savoir plus</a>
            </div>
        </div>
    </div>
</section>

{{-- ══════════ STATISTIQUES ══════════ --}}
<section class="stats-section" data-aos="fade-up">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number" data-count="50">0</div>
                <div class="stat-label">Projets Réalisés</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-count="200">0</div>
                <div class="stat-label">Clients Satisfaits</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-count="5">0</div>
                <div class="stat-label">Pays Couverts</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-count="10">0</div>
                <div class="stat-label">Années d'Expérience</div>
            </div>
        </div>
    </div>
</section>

{{-- ══════════ POURQUOI NOUS ══════════ --}}
<section class="section" id="a-propos">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small">Pourquoi nous choisir</span>
            <h2>Votre Partenaire de Confiance</h2>
        </div>

        <div class="grid grid-2">
            <div class="card value-card" data-aos="fade-right" data-aos-delay="100">
                <div class="value-icon"><i class="fas fa-gem"></i></div>
                <div class="value-content">
                    <h3 class="card-title">Excellence</h3>
                    <p class="card-text">Nous visons l'excellence dans chaque projet et chaque interaction avec nos partenaires et clients.</p>
                </div>
            </div>

            <div class="card value-card" data-aos="fade-left" data-aos-delay="200">
                <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="value-content">
                    <h3 class="card-title">Intégrité</h3>
                    <p class="card-text">La transparence et l'honnêteté sont au cœur de toutes nos opérations commerciales.</p>
                </div>
            </div>

            <div class="card value-card" data-aos="fade-right" data-aos-delay="300">
                <div class="value-icon"><i class="fas fa-lightbulb"></i></div>
                <div class="value-content">
                    <h3 class="card-title">Innovation</h3>
                    <p class="card-text">Nous adoptons des solutions modernes pour répondre aux défis de demain en Afrique.</p>
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

{{-- ══════════ POLES D'ACTIVITE ══════════ --}}
<section class="section" style="background: var(--couleur-gris-clair);">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small">Nos pôles</span>
            <h2>Pôles d'Activité</h2>
            <p>Découvrez nos deux pôles majeurs qui constituent le cœur de notre activité.</p>
        </div>

        <div class="grid grid-2">
            <a href="{{ route('prestige-immobilier') }}" class="card card--overlay" style="background-image:url('{{ asset('images/prestige.jpeg') }}')" data-aos="fade-right">
                <div class="card__overlay">
                    <h3>Prestige Immobilier</h3>
                    <p>Conseil en investissement, gestion locative et vente de biens haut de gamme.</p>
                </div>
            </a>

            <a href="{{ route('translogistique') }}" class="card card--overlay" style="background-image:url('{{ asset('images/translogistique.jpeg') }}')" data-aos="fade-left">
                <div class="card__overlay">
                    <h3>Eco+Trans-Logistique</h3>
                    <p>Import-export, transport et solutions logistiques intégrées.</p>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- ══════════ CTA ══════════ --}}
<section class="section">
    <div class="container">
        <div class="cta-card" data-aos="zoom-in">
            <div class="cta-content">
                <h2>Prêt à développer vos affaires ?</h2>
                <p>Contactez-nous dès aujourd'hui pour discuter de votre projet et découvrir comment ECO+HOLDING peut vous accompagner vers le succès.</p>
                <a href="#contact" class="btn btn-accent btn-large">
                    <i class="fas fa-paper-plane"></i> Contactez-nous
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ══════════ CONTACT ══════════ --}}
<section class="section" id="contact" style="background: var(--couleur-gris-clair);">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="section-title-small">Parlons de votre projet</span>
            <h2>Contactez-nous</h2>
            <p>Remplissez le formulaire ci-dessous et notre équipe vous répondra dans les plus brefs délais.</p>
        </div>

        <div style="max-width: 700px; margin: 0 auto;">
            <div id="form-message" class="alert"></div>

            <form id="contact-form" action="{{ route('demandes.store') }}" method="POST" class="card" data-aos="fade-up" data-aos-delay="200" style="padding: var(--espace-2xl);">
                @csrf
                <div class="grid grid-2">
                    <div class="form-group">
                        <label class="form-label" for="nom">Nom <span class="required">*</span></label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required>
                        <div class="form-error" id="nom-error"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom">
                        <div class="form-error" id="prenom-error"></div>
                    </div>
                </div>

                <div class="grid grid-2">
                    <div class="form-group">
                        <label class="form-label" for="email">Email <span class="required">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="votre@email.com" required>
                        <div class="form-error" id="email-error"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="telephone">Téléphone <span class="required">*</span></label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="+225 XX XX XX XX" required>
                        <div class="form-error" id="telephone-error"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="service">Service souhaité <span class="required">*</span></label>
                    <select class="form-control" id="service" name="service" required>
                        <option value="">-- Sélectionnez un service --</option>
                        <option value="Gestion d'affaires">Gestion d'affaires</option>
                        <option value="Prestige Immobilier">Prestige Immobilier</option>
                        <option value="Eco+Trans-Logistique">Eco+Trans-Logistique</option>
                        <option value="Conseil fiscal">Conseil fiscal</option>
                        <option value="Création d'entreprise">Création d'entreprise</option>
                        <option value="Autre">Autre</option>
                    </select>
                    <div class="form-error" id="service-error"></div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="message">Message <span class="required">*</span></label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Décrivez votre besoin..." required></textarea>
                    <div class="form-error" id="message-error"></div>
                </div>

                <button type="submit" class="btn btn-accent btn-large" style="width: 100%;">
                    <i class="fas fa-paper-plane"></i> Envoyer ma demande
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
