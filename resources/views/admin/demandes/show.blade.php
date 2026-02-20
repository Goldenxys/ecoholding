@extends('layouts.app')

@section('content')
<div class="py-6 space-y-4">
    <h1 class="text-2xl font-bold">Détail demande #{{ $demande->id }}</h1>

    <p><strong>Nom :</strong> {{ $demande->nom }} {{ $demande->prenom }}</p>
    <p><strong>Email :</strong> {{ $demande->email }}</p>
    <p><strong>Téléphone :</strong> {{ $demande->telephone }}</p>
    <p><strong>Service :</strong> {{ $demande->service }}</p>
    <p><strong>Date souhaitée :</strong> {{ optional($demande->date_souhaitee)->format('d/m/Y') }}</p>
    <p><strong>Statut :</strong> {{ $demande->statut }}</p>
    <p><strong>Message :</strong><br>{{ $demande->message }}</p>
    <p><strong>Créée le :</strong> {{ optional($demande->date_creation)->format('d/m/Y H:i') }}</p>
    <p><strong>Modifiée le :</strong> {{ optional($demande->date_modification)->format('d/m/Y H:i') }}</p>
    <p><strong>Traité par :</strong> {{ $demande->agentTraitant?->name ?? 'Non assignée' }}</p>

    <a href="{{ route('admin.demandes.edit', $demande) }}">Modifier cette demande</a>
</div>
@endsection