<x-app-layout>
    <div class="admin-demands">
        <div class="container">
            <div class="page-header">
                <h1><i class="fas fa-list"></i> Gestion des demandes</h1>
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                    <i class="fas fa-tachometer-alt"></i> Tableau de bord
                </a>
            </div>

            {{-- Filtres --}}
            <div class="filters-section">
                <form method="GET" class="filters-form">
                    <div class="filters-grid">
                        <div class="filter-group">
                            <label for="recherche"><i class="fas fa-search"></i> Recherche :</label>
                            <input type="text" name="recherche" id="recherche" class="form-control"
                                   placeholder="Nom, email, téléphone..."
                                   value="{{ $filters['recherche'] }}">
                        </div>
                        <div class="filter-group">
                            <label for="statut"><i class="fas fa-flag"></i> Statut :</label>
                            <select name="statut" id="statut" class="form-control">
                                <option value="">Tous les statuts</option>
                                <option value="nouveau" @selected($filters['statut'] === 'nouveau')>Nouveau</option>
                                <option value="en_cours" @selected($filters['statut'] === 'en_cours')>En cours</option>
                                <option value="traite" @selected($filters['statut'] === 'traite')>Traité</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label for="service"><i class="fas fa-briefcase"></i> Service :</label>
                            <select name="service" id="service" class="form-control">
                                <option value="">Tous les services</option>
                                <option value="Gestion d'affaires" @selected($filters['service'] === "Gestion d'affaires")>Gestion d'affaires</option>
                                <option value="Prestige Immobilier" @selected($filters['service'] === 'Prestige Immobilier')>Prestige Immobilier</option>
                                <option value="Eco+Trans-Logistique" @selected($filters['service'] === 'Eco+Trans-Logistique')>Eco+Trans-Logistique</option>
                                <option value="Conseil fiscal" @selected($filters['service'] === 'Conseil fiscal')>Conseil fiscal</option>
                                <option value="Création d'entreprise" @selected($filters['service'] === "Création d'entreprise")>Création d'entreprise</option>
                                <option value="Autre" @selected($filters['service'] === 'Autre')>Autre</option>
                            </select>
                        </div>
                        <div class="filter-actions">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-filter"></i> Filtrer
                            </button>
                            <a href="{{ route('demandes.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Réinitialiser
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            {{-- Liste des demandes --}}
            <div class="demands-table-container">
                <div class="table-header">
                    <h2><i class="fas fa-inbox"></i> Demandes ({{ $demandes->total() }})</h2>
                </div>

                @if($demandes->count() > 0)
                    <div class="demands-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Client</th>
                                    <th>Service</th>
                                    <th>Statut</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($demandes as $demande)
                                    <tr class="demande-row">
                                        <td>#{{ $demande->id }}</td>
                                        <td>
                                            <div class="client-info">
                                                <strong>{{ $demande->nom }} {{ $demande->prenom }}</strong>
                                                <br><small>{{ $demande->email }}</small>
                                            </div>
                                        </td>
                                        <td>{{ $demande->service }}</td>
                                        <td>
                                            <span class="status-badge status-{{ $demande->statut }}">
                                                {{ $demande->statut === 'nouveau' ? 'Nouveau' : ($demande->statut === 'en_cours' ? 'En cours' : 'Traité') }}
                                            </span>
                                        </td>
                                        <td>{{ optional($demande->date_creation)->format('d/m/Y H:i') }}</td>
                                        <td>
                                            <div style="display:flex; gap:0.5rem; align-items:center;">
                                                <a href="{{ route('demandes.show', $demande) }}" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-eye"></i> Voir
                                                </a>
                                                <form method="POST" action="{{ route('demandes.destroy', $demande) }}" class="eco-confirm-delete" data-confirm-title="Supprimer cette demande ?" data-confirm-message="La demande #{{ $demande->id }} de {{ $demande->nom }} sera définitivement supprimée." data-confirm-btn="Supprimer">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i> Supprimer
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- Pagination --}}
                    @if($demandes->hasPages())
                        <div class="pagination-wrapper">
                            @if($demandes->onFirstPage())
                                <span class="page-link disabled"><i class="fas fa-chevron-left"></i> Précédent</span>
                            @else
                                <a href="{{ $demandes->previousPageUrl() }}" class="page-link">
                                    <i class="fas fa-chevron-left"></i> Précédent
                                </a>
                            @endif

                            @foreach($demandes->getUrlRange(1, $demandes->lastPage()) as $page => $url)
                                @if($page == $demandes->currentPage())
                                    <span class="page-link current">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                                @endif
                            @endforeach

                            @if($demandes->hasMorePages())
                                <a href="{{ $demandes->nextPageUrl() }}" class="page-link">
                                    Suivant <i class="fas fa-chevron-right"></i>
                                </a>
                            @else
                                <span class="page-link disabled">Suivant <i class="fas fa-chevron-right"></i></span>
                            @endif
                        </div>
                    @endif

                @else
                    <div class="no-demands">
                        <i class="fas fa-inbox"></i>
                        <h3>Aucune demande trouvée</h3>
                        <p>Il n'y a pas de demandes correspondant aux critères sélectionnés.</p>
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
