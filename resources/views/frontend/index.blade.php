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
            <img src="{{ asset('images/team shoot.png') }}" alt="ECO+HOLDING Team" class="hero-image hero-image--team">
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

{{-- ══════════ DOCUMENTS OFFICIELS ══════════ --}}
<section class="section docs-officiels-section" style="background: linear-gradient(160deg, #05101F 0%, #0A1E3C 55%, #0E2448 100%); overflow: hidden; position: relative;">

    {{-- Décoration fond --}}
    <div style="position:absolute;top:-120px;right:-120px;width:500px;height:500px;background:radial-gradient(circle,rgba(220,38,38,0.12) 0%,transparent 70%);border-radius:50%;pointer-events:none;"></div>
    <div style="position:absolute;bottom:-80px;left:-80px;width:350px;height:350px;background:radial-gradient(circle,rgba(26,75,135,0.25) 0%,transparent 70%);border-radius:50%;pointer-events:none;"></div>

    <div class="container" style="position: relative; z-index: 1;">

        {{-- En-tête --}}
        <div class="section-title" data-aos="fade-up" style="margin-bottom: var(--espace-xl);">
            <span class="section-title-small" style="color: #DC2626;">Certifiée par l'État Ivoirien</span>
            <h2 style="color: #fff; font-size: clamp(1.75rem, 4vw, 2.75rem);">Une Entreprise Légale &amp; 100% Officielle</h2>
            <p style="color: rgba(255,255,255,0.82); font-size: 1.1rem; max-width: 660px; margin: 0 auto;">
                Avant de confier vos affaires à une structure, exigez les preuves. Nos documents délivrés et authentifiés par les autorités ivoiriennes compétentes sont là — consultables, vérifiables, incontestables.
            </p>
        </div>

        {{-- Bandeau de confiance --}}
        <div class="docs-trust-banner" data-aos="fade-up" data-aos-delay="100">
            <div class="trust-icon"><i class="fas fa-shield-halved"></i></div>
            <div class="trust-text">
                <strong>Votre sécurité, notre priorité.</strong> Tous nos actes constitutifs ont été déposés, vérifiés et authentifiés par le Greffe du Tribunal de Commerce d'Abidjan et le Registre du Commerce et du Crédit Mobilier (RCCM). Aucune zone d'ombre, que de la transparence.
            </div>
        </div>

        {{-- Nouvelle disposition : image doc + description côte à côte --}}
        <div class="docs-new-layout" data-aos="fade-up" data-aos-delay="150">

            {{-- Document 1 — Procès-Verbal --}}
            <div class="doc-item doc-item--left">
                <div class="doc-paper-wrap">
                    <button class="doc-paper-btn" onclick="openDocModal('{{ asset('images/doc1.pdf') }}')" aria-label="Voir le procès-verbal">
                        <div class="doc-paper-sheet doc-paper-sheet--1">
                            <img src="{{ asset('images/doc1.png') }}" alt="Procès-Verbal de Dépôt de Pièces" class="doc-paper-img" loading="lazy">
                            <div class="doc-paper-overlay">
                                <span class="doc-paper-cta"><i class="fas fa-expand-alt"></i> Consulter</span>
                            </div>
                        </div>
                        <div class="doc-paper-shadow"></div>
                    </button>
                </div>
                <div class="doc-item-info">
                    <div class="doc-item-badge"><i class="fas fa-gavel"></i> Tribunal de Commerce d'Abidjan</div>
                    <h3 class="doc-item-title">Procès-Verbal de Dépôt de Pièces</h3>
                    <p class="doc-item-ref"><i class="fas fa-hashtag"></i> N° 21474/GTCA/RC/2026 — 13 Mars 2026</p>
                    <p class="doc-item-desc">Ce procès-verbal confirme le dépôt des 32 pièces constitutives d'ECO PLUS HOLDING au Greffe du Tribunal de Commerce d'Abidjan : statuts originaux signés, contrat de bail, CNI du gérant et déclaration sur l'honneur. Signé et authentifié par le Greffier en Chef.</p>
                    <div class="doc-item-tags">
                        <span><i class="fas fa-circle-check"></i> Authentifié</span>
                        <span><i class="fas fa-calendar"></i> 13 Mars 2026</span>
                        <span><i class="fas fa-location-dot"></i> Abidjan, CI</span>
                    </div>
                    <button onclick="openDocModal('{{ asset('images/doc1.pdf') }}')" class="btn btn-accent btn-small" style="margin-top: 1rem; width: 100%; justify-content: center;">
                        <i class="fas fa-eye"></i> Voir le document complet
                    </button>
                </div>
            </div>

            {{-- Document 2 — RCCM --}}
            <div class="doc-item doc-item--right">
                <div class="doc-item-info">
                    <div class="doc-item-badge" style="background: linear-gradient(135deg, #DC2626, #991B1B);"><i class="fas fa-building-columns"></i> Registre du Commerce — RCCM</div>
                    <h3 class="doc-item-title">Déclaration d'Immatriculation</h3>
                    <p class="doc-item-ref"><i class="fas fa-hashtag"></i> CI-ABJ-03-2026-B13-03910 — 24 Mars 2026</p>
                    <p class="doc-item-desc">Déclaration officielle d'immatriculation au Registre du Commerce et du Crédit Mobilier. ECO PLUS HOLDING SARLU, capital social 3 000 000 F CFA, couvre la gestion d'affaires, l'immobilier, la logistique et l'intermédiation financière — active depuis le 27 janvier 2026.</p>
                    <div class="doc-item-tags">
                        <span><i class="fas fa-circle-check"></i> RCCM 2014-M1</span>
                        <span><i class="fas fa-coins"></i> 3 000 000 F CFA</span>
                        <span><i class="fas fa-calendar"></i> 24 Mars 2026</span>
                    </div>
                    <button onclick="openDocModal('{{ asset('images/doc2.pdf') }}')" class="btn btn-accent btn-small" style="margin-top: 1rem; width: 100%; justify-content: center;">
                        <i class="fas fa-eye"></i> Voir le document complet
                    </button>
                </div>
                <div class="doc-paper-wrap">
                    <button class="doc-paper-btn" onclick="openDocModal('{{ asset('images/doc2.pdf') }}')" aria-label="Voir la déclaration RCCM">
                        <div class="doc-paper-sheet doc-paper-sheet--2">
                            <img src="{{ asset('images/doc3.png') }}" alt="Déclaration d'Immatriculation RCCM" class="doc-paper-img" loading="lazy">
                            <div class="doc-paper-overlay">
                                <span class="doc-paper-cta"><i class="fas fa-expand-alt"></i> Consulter</span>
                            </div>
                        </div>
                        <div class="doc-paper-shadow"></div>
                    </button>
                </div>
            </div>

        </div>

        {{-- Stats légales --}}
        <div class="docs-legal-stats" data-aos="fade-up" data-aos-delay="300">
            <div class="legal-stat-item"><i class="fas fa-scale-balanced"></i><span>SARLU Légalement Constituée</span></div>
            <div class="legal-stat-sep"></div>
            <div class="legal-stat-item"><i class="fas fa-building"></i><span>Siège : Cocody Riviera Palmeraie</span></div>
            <div class="legal-stat-sep"></div>
            <div class="legal-stat-item"><i class="fas fa-id-badge"></i><span>RCCM : CI-ABJ-03-2026-B13-03910</span></div>
            <div class="legal-stat-sep"></div>
            <div class="legal-stat-item"><i class="fas fa-coins"></i><span>Capital : 3 000 000 F CFA</span></div>
        </div>
    </div>
</section>

{{-- ══ MODAL DOCUMENT VIEWER ══ --}}
<div id="doc-modal" class="doc-modal-overlay" onclick="closeDocModal()" role="dialog" aria-modal="true" aria-label="Visualiseur de document">
    <div class="doc-modal-box" onclick="event.stopPropagation()">
        <div class="doc-modal-header">
            <span class="doc-modal-title"><i class="fas fa-file-alt"></i> Document Officiel — ECO PLUS HOLDING</span>
            <button class="doc-modal-close" onclick="closeDocModal()" aria-label="Fermer"><i class="fas fa-times"></i></button>
        </div>
        <div class="doc-modal-body">
            <iframe id="doc-modal-iframe" src="" class="doc-modal-iframe" title="Document officiel"></iframe>
        </div>
        <div class="doc-modal-footer">
            <a id="doc-modal-download" href="#" target="_blank" class="btn btn-accent btn-small">
                <i class="fas fa-external-link-alt"></i> Ouvrir dans un nouvel onglet
            </a>
        </div>
    </div>
</div>
<script>
function openDocModal(url) {
    var modal = document.getElementById('doc-modal');
    var iframe = document.getElementById('doc-modal-iframe');
    var dl = document.getElementById('doc-modal-download');
    iframe.src = url;
    dl.href = url;
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
}
function closeDocModal() {
    var modal = document.getElementById('doc-modal');
    var iframe = document.getElementById('doc-modal-iframe');
    modal.classList.remove('active');
    iframe.src = '';
    document.body.style.overflow = '';
}
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeDocModal();
});
</script>

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
