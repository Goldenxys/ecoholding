@extends('layouts.app')

@section('content')
<div class="py-6 space-y-6">
    <h1 class="text-2xl font-bold">Modifier la demande #{{ $demande->id }}</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if($whatsappUrl)
        <a href="{{ $whatsappUrl }}" target="_blank">Contacter sur WhatsApp</a>
    @endif

    <form method="POST" action="{{ route('admin.demandes.update', $demande) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label>Statut</label>
            <select name="statut">
                <option value="nouveau" @selected(old('statut', $demande->statut) === 'nouveau')>Nouveau</option>
                <option value="en_cours" @selected(old('statut', $demande->statut) === 'en_cours')>En cours</option>
                <option value="traite" @selected(old('statut', $demande->statut) === 'traite')>Traité</option>
            </select>
        </div>

        <div>
            <label>Date souhaitée</label>
            <input
                type="date"
                name="date_souhaitee"
                value="{{ old('date_souhaitee', optional($demande->date_souhaitee)->format('Y-m-d')) }}"
                required
            >
        </div>

        <div>
            <label>Notes admin</label>
            <textarea name="notes_admin" rows="6">{{ old('notes_admin', $demande->notes_admin) }}</textarea>
        </div>

        <button type="submit">Enregistrer</button>
    </form>
</div>
@endsection