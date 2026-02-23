<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Demande #{{ $demande->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-4">

                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-500">Nom</p>
                        <p class="font-medium">{{ $demande->nom }} {{ $demande->prenom }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Email</p>
                        <p class="font-medium">{{ $demande->email }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Téléphone</p>
                        <p class="font-medium">{{ $demande->telephone }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Service</p>
                        <p class="font-medium">{{ $demande->service }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Date souhaitée</p>
                        <p class="font-medium">{{ optional($demande->date_souhaitee)->format('d/m/Y') ?? '—' }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Statut</p>
                        <p class="font-medium">
                            @if($demande->statut === 'nouveau')
                                <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Nouveau</span>
                            @elseif($demande->statut === 'en_cours')
                                <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">En cours</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Traité</span>
                            @endif
                        </p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Créée le</p>
                        <p class="font-medium">{{ optional($demande->date_creation)->format('d/m/Y H:i') }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Traité par</p>
                        <p class="font-medium">{{ $demande->agentTraitant?->name ?? 'Non assignée' }}</p>
                    </div>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Message</p>
                    <p class="mt-1 p-3 bg-gray-50 rounded-md text-gray-700">{{ $demande->message }}</p>
                </div>

                <div class="flex gap-3 pt-4">
                    <a href="{{ route('demandes.edit', $demande) }}" class="bg-gray-800 text-white py-2 px-4 rounded-md text-sm hover:bg-gray-700">
                        Modifier
                    </a>
                    <a href="{{ route('demandes.index') }}" class="bg-white border border-gray-300 text-gray-700 py-2 px-4 rounded-md text-sm hover:bg-gray-50">
                        Retour à la liste
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
