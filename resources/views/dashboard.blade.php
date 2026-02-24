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

    {{-- Notification toast container --}}
    <div id="notification-container" style="position:fixed; top:1.5rem; right:1.5rem; z-index:9999; display:flex; flex-direction:column; gap:0.75rem;"></div>

    {{-- Son de notification --}}
    <audio id="notification-sound" preload="auto">
        <source src="data:audio/wav;base64,UklGRnoGAABXQVZFZm10IBAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgipKRg3BkYHaDi42FdmxocH2Dg3tyb3F5foF8dm9vcnZ6enl2c3N0d3l5eHZzc3R3eXl4dnR1dnh5eXd2dXV3eHl5eHZ1dXZ4eXl4d3Z2d3h5eXh3d3d3eHh4eHd3d3d4eHh4d3d3d3h4eHh4d3d3eHh4eHh4d3d3eHh4eHh4eA==" type="audio/wav">
    </audio>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const statsUrl = "{{ route('demandes.stats') }}";
        let lastKnownId = {{ $demandesRecentes->first()?->id ?? 0 }};
        const POLL_INTERVAL = 15000; // 15 secondes

        function showNotification(nom, service) {
            const container = document.getElementById('notification-container');
            const toast = document.createElement('div');
            toast.className = 'notification-toast';
            toast.innerHTML = `
                <div class="notification-icon"><i class="fas fa-bell"></i></div>
                <div class="notification-body">
                    <strong>Nouvelle demande !</strong>
                    <p>${nom} — ${service}</p>
                </div>
                <button class="notification-close" onclick="this.parentElement.remove()">&times;</button>
            `;
            container.appendChild(toast);

            // Son de notification
            try {
                const sound = document.getElementById('notification-sound');
                sound.currentTime = 0;
                sound.play().catch(() => {});
            } catch (e) {}

            // Auto-suppression après 8s
            setTimeout(() => {
                if (toast.parentElement) {
                    toast.style.opacity = '0';
                    toast.style.transform = 'translateX(100%)';
                    setTimeout(() => toast.remove(), 400);
                }
            }, 8000);
        }

        function updateStats(data) {
            const statCards = document.querySelectorAll('.stat-card .stat-content h3');
            if (statCards.length >= 4) {
                statCards[0].textContent = data.total;
                statCards[1].textContent = data.nouveau;
                statCards[2].textContent = data.en_cours;
                statCards[3].textContent = data.traite;
            }
        }

        function pollStats() {
            fetch(statsUrl, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                updateStats(data);

                if (data.derniere_id && data.derniere_id > lastKnownId) {
                    showNotification(
                        data.derniere_nom || 'Client',
                        data.derniere_service || 'Service'
                    );
                    lastKnownId = data.derniere_id;

                    // Recharger le tableau des demandes récentes
                    setTimeout(() => location.reload(), 3000);
                }
            })
            .catch(() => {});
        }

        setInterval(pollStats, POLL_INTERVAL);
    });
    </script>
</x-app-layout>
