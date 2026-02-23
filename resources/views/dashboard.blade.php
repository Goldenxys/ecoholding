<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Statistiques --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <p class="text-sm text-gray-500">Total</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $totalDemandes }}</p>
                </div>
                <div class="bg-blue-50 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <p class="text-sm text-blue-600">Nouvelles</p>
                    <p class="text-2xl font-bold text-blue-800">{{ $nouvellesDemandes }}</p>
                </div>
                <div class="bg-yellow-50 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <p class="text-sm text-yellow-600">En cours</p>
                    <p class="text-2xl font-bold text-yellow-800">{{ $enCours }}</p>
                </div>
                <div class="bg-green-50 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <p class="text-sm text-green-600">Traitées</p>
                    <p class="text-2xl font-bold text-green-800">{{ $traitees }}</p>
                </div>
            </div>

            {{-- Demandes récentes --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Demandes récentes</h3>
                        <a href="{{ route('demandes.index') }}" class="text-sm text-blue-600 hover:underline">Voir toutes</a>
                    </div>

                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b text-left text-gray-500">
                                <th class="py-2">ID</th>
                                <th class="py-2">Nom</th>
                                <th class="py-2">Service</th>
                                <th class="py-2">Statut</th>
                                <th class="py-2">Date</th>
                                <th class="py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($demandesRecentes as $demande)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-2">#{{ $demande->id }}</td>
                                    <td class="py-2">{{ $demande->nom }}</td>
                                    <td class="py-2">{{ $demande->service }}</td>
                                    <td class="py-2">
                                        @if($demande->statut === 'nouveau')
                                            <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Nouveau</span>
                                        @elseif($demande->statut === 'en_cours')
                                            <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">En cours</span>
                                        @else
                                            <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Traité</span>
                                        @endif
                                    </td>
                                    <td class="py-2">{{ optional($demande->date_creation)->format('d/m/Y') }}</td>
                                    <td class="py-2">
                                        <a href="{{ route('demandes.show', $demande) }}" class="text-blue-600 hover:underline">Voir</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="py-4 text-center text-gray-400">Aucune demande pour le moment.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
