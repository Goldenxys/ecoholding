<x-app-layout>
    <div class="admin-demand-detail">
        <div class="container">
            <div class="page-header">
                <a href="{{ route('demandes.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Retour à la liste
                </a>
                <h1><i class="fas fa-file-alt"></i> Détail de la demande #{{ $demande->id }}</h1>
            </div>

            @if(session('success'))
                <div class="alert alert-success" style="display:block;">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            <div class="demand-detail-grid">
                {{-- Informations client --}}
                <div class="detail-section">
                    <h2><i class="fas fa-user"></i> Informations client</h2>
                    <div class="info-grid">
                        <div class="info-item">
                            <label>Nom complet :</label>
                            <span>{{ $demande->nom }} {{ $demande->prenom }}</span>
                        </div>
                        <div class="info-item">
                            <label>Email :</label>
                            <span><a href="mailto:{{ $demande->email }}">{{ $demande->email }}</a></span>
                        </div>
                        <div class="info-item">
                            <label>Téléphone :</label>
                            <span><a href="tel:{{ $demande->telephone }}">{{ $demande->telephone }}</a></span>
                        </div>
                        <div class="info-item">
                            <label>Service demandé :</label>
                            <span>{{ $demande->service }}</span>
                        </div>
                        <div class="info-item">
                            <label>Date souhaitée :</label>
                            <span>{{ optional($demande->date_souhaitee)->format('d/m/Y') ?? '—' }}</span>
                        </div>
                        <div class="info-item">
                            <label>Date de soumission :</label>
                            <span>{{ optional($demande->date_creation)->format('d/m/Y H:i') }}</span>
                        </div>
                        <div class="info-item">
                            <label>Statut actuel :</label>
                            <span class="status-badge status-{{ $demande->statut }}">
                                {{ $demande->statut === 'nouveau' ? 'Nouveau' : ($demande->statut === 'en_cours' ? 'En cours' : 'Traité') }}
                            </span>
                        </div>
                        <div class="info-item">
                            <label>Traité par :</label>
                            <span>{{ $demande->adminTraitant?->name ?? 'Non assignée' }}</span>
                        </div>
                    </div>

                    @if($demande->message)
                        <div class="message-section">
                            <label><i class="fas fa-comment"></i> Message du client :</label>
                            <div class="message-content">
                                {{ $demande->message }}
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Modifier le statut --}}
                <div class="detail-section">
                    <h2><i class="fas fa-edit"></i> Modifier le statut</h2>
                    <form method="POST" action="{{ route('demandes.update', $demande) }}" class="status-form">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="statut">Statut</label>
                            <select name="statut" id="statut" class="form-control">
                                <option value="nouveau" @selected(old('statut', $demande->statut) === 'nouveau')>Nouveau</option>
                                <option value="en_cours" @selected(old('statut', $demande->statut) === 'en_cours')>En cours</option>
                                <option value="traite" @selected(old('statut', $demande->statut) === 'traite')>Traité</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="notes_admin">Notes administrateur</label>
                            <textarea name="notes_admin" id="notes_admin" class="form-control" rows="4" placeholder="Ajoutez des notes...">{{ old('notes_admin', $demande->notes_admin) }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Mettre à jour
                        </button>
                    </form>
                </div>

                {{-- Contacter le client --}}
                <div class="detail-section">
                    <h2><i class="fas fa-paper-plane"></i> Contacter le client</h2>
                    <div class="contact-actions">
                        <a href="mailto:{{ $demande->email }}" class="btn btn-primary">
                            <i class="fas fa-envelope"></i> Envoyer un email
                        </a>
                        @if($whatsappUrl)
                            <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-whatsapp">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>
                        @endif
                        <a href="tel:{{ $demande->telephone }}" class="btn btn-secondary">
                            <i class="fas fa-phone"></i> Appeler
                        </a>
                    </div>
                </div>
            </div>

            {{-- Notes admin --}}
            @if($demande->notes_admin)
                <div class="detail-section" style="margin-top:var(--espace-lg);">
                    <h2><i class="fas fa-sticky-note"></i> Notes administrateur</h2>
                    <div class="message-content">
                        {{ $demande->notes_admin }}
                    </div>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
