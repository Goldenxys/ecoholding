@extends('layouts.app')

@section('content')
<div class="py-6 space-y-6">
    <h1 class="text-2xl font-bold">Demandes clients</h1>

    <form method="GET" class="grid md:grid-cols-4 gap-3">
        <input type="text" name="email" value="{{ $filters['email'] }}" placeholder="Filtrer par email">
        <input type="text" name="service" value="{{ $filters['service'] }}" placeholder="Filtrer par service">
        <select name="statut">
            <option value="">Tous les statuts</option>
            <option value="nouveau" @selected($filters['statut']==='nouveau')>Nouveau</option>
            <option value="en_cours" @selected($filters['statut']==='en_cours')>En cours</option>
            <option value="traite" @selected($filters['statut']==='traite')>Traité</option>
        </select>
        <button type="submit">Filtrer</button>
    </form>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Service</th>
                <th>Statut</th>
                <th>Assigné à</th>
                <th>Créée le</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($demandes as $demande)
                <tr>
                    <td>{{ $demande->id }}</td>
                    <td>{{ $demande->nom }} {{ $demande->prenom }}</td>
                    <td>{{ $demande->email }}</td>
                    <td>{{ $demande->service }}</td>
                    <td>{{ $demande->statut }}</td>
                    <td>{{ $demande->agentTraitant?->name ?? 'Non assignée' }}</td>
                    <td>{{ optional($demande->date_creation)->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('admin.demandes.show', $demande) }}">Voir</a>
                        <a href="{{ route('admin.demandes.edit', $demande) }}">Éditer</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Aucune demande trouvée.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <div>{{ $demandes->links() }}</div>
</div>
@endsection