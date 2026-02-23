<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Demandes clients
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Filtres --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="GET" class="grid md:grid-cols-4 gap-3 items-end">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="text" name="email" value="{{ $filters['email'] }}" placeholder="Filtrer par email"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Service</label>
                        <input type="text" name="service" value="{{ $filters['service'] }}" placeholder="Filtrer par service"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                        <select name="statut" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                            <option value="">Tous les statuts</option>
                            <option value="nouveau" @selected($filters['statut']==='nouveau')>Nouveau</option>
                            <option value="en_cours" @selected($filters['statut']==='en_cours')>En cours</option>
                            <option value="traite" @selected($filters['statut']==='traite')>Traité</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-gray-800 text-white py-2 px-4 rounded-md text-sm hover:bg-gray-700">
                            Filtrer
                        </button>
                    </div>
                </form>
            </div>

            {{-- Tableau --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b text-left text-gray-500">
                                <th class="py-2 px-2">ID</th>
                                <th class="py-2 px-2">Nom</th>
                                <th class="py-2 px-2">Email</th>
                                <th class="py-2 px-2">Service</th>
                                <th class="py-2 px-2">Statut</th>
                                <th class="py-2 px-2">Assigné à</th>
                                <th class="py-2 px-2">Créée le</th>
                                <th class="py-2 px-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($demandes as $demande)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-2 px-2">{{ $demande->id }}</td>
                                    <td class="py-2 px-2">{{ $demande->nom }} {{ $demande->prenom }}</td>
                                    <td class="py-2 px-2">{{ $demande->email }}</td>
                                    <td class="py-2 px-2">{{ $demande->service }}</td>
                                    <td class="py-2 px-2">
                                        @if($demande->statut === 'nouveau')
                                            <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Nouveau</span>
                                        @elseif($demande->statut === 'en_cours')
                                            <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">En cours</span>
                                        @else
                                            <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Traité</span>
                                        @endif
                                    </td>
                                    <td class="py-2 px-2">{{ $demande->agentTraitant?->name ?? '—' }}</td>
                                    <td class="py-2 px-2">{{ optional($demande->date_creation)->format('d/m/Y H:i') }}</td>
                                    <td class="py-2 px-2 space-x-2">
                                        <a href="{{ route('demandes.show', $demande) }}" class="text-blue-600 hover:underline">Voir</a>
                                        <a href="{{ route('demandes.edit', $demande) }}" class="text-green-600 hover:underline">Éditer</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="py-4 text-center text-gray-400">Aucune demande trouvée.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="mt-4">{{ $demandes->links() }}</div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
