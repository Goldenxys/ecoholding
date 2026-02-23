<x-app-layout>
    <div class="admin-dashboard">
        <div class="container">
            <div class="dashboard-header">
                <h1><i class="fas fa-tachometer-alt"></i> Tableau de bord</h1>
                <p>Bienvenue, {{ Auth::user()->name }}</p>
            </div>

            {{-- Statistiques --}}
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-list"></i>
                    </div>
                    <div class="stat-content">
                        <h3>{{ $totalDemandes }}</h3>
                        <p>Total demandes</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon new">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-content">
                        <h3>{{ $nouvellesDemandes }}</h3>
                        <p>Nouvelles demandes</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon in-progress">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="stat-content">
                        <h3>{{ $enCours }}</h3>
                        <p>En cours</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon completed">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="stat-content">
                        <h3>{{ $traitees }}</h3>
                        <p>Traitées</p>
                    </div>
                </div>
            </div>

            {{-- Demandes récentes --}}
            <div class="recent-requests">
                <div class="section-header">
                    <h2><i class="fas fa-clock"></i> Demandes récentes</h2>
                    <a href="{{ route('demandes.index') }}" class="btn btn-primary">
                        <i class="fas fa-list"></i> Voir toutes les demandes
                    </a>
                </div>
                <div class="requests-table">
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
                            @forelse($demandesRecentes as $demande)
                                <tr>
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
                                        <a href="{{ route('demandes.show', $demande) }}" class="btn btn-sm btn-secondary">
                                            <i class="fas fa-eye"></i> Voir
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="empty-state">
                                        <i class="fas fa-inbox"></i>
                                        <p>Aucune demande pour le moment.</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
