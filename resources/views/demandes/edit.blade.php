<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier la demande #{{ $demande->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6">

                @if(session('success'))
                    <div class="p-4 rounded-md bg-green-50 text-green-800 text-sm">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Info client (lecture seule) --}}
                <div class="grid md:grid-cols-2 gap-4 p-4 bg-gray-50 rounded-md">
                    <div>
                        <p class="text-sm text-gray-500">Client</p>
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
                </div>

                @if($whatsappUrl)
                    <a href="{{ $whatsappUrl }}" target="_blank" class="inline-flex items-center gap-2 bg-green-600 text-white py-2 px-4 rounded-md text-sm hover:bg-green-700">
                        Contacter sur WhatsApp
                    </a>
                @endif

                {{-- Formulaire --}}
                <form method="POST" action="{{ route('demandes.update', $demande) }}" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                        <select name="statut" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                            <option value="nouveau" @selected(old('statut', $demande->statut) === 'nouveau')>Nouveau</option>
                            <option value="en_cours" @selected(old('statut', $demande->statut) === 'en_cours')>En cours</option>
                            <option value="traite" @selected(old('statut', $demande->statut) === 'traite')>Traité</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date souhaitée</label>
                        <input type="date" name="date_souhaitee"
                            value="{{ old('date_souhaitee', optional($demande->date_souhaitee)->format('Y-m-d')) }}"
                            required
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Notes admin</label>
                        <textarea name="notes_admin" rows="6"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">{{ old('notes_admin', $demande->notes_admin) }}</textarea>
                    </div>

                    <div class="flex gap-3">
                        <button type="submit" class="bg-gray-800 text-white py-2 px-4 rounded-md text-sm hover:bg-gray-700">
                            Enregistrer
                        </button>
                        <a href="{{ route('demandes.index') }}" class="bg-white border border-gray-300 text-gray-700 py-2 px-4 rounded-md text-sm hover:bg-gray-50">
                            Annuler
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
