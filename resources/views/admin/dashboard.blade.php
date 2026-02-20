@extends('layouts.app')

@section('content')
<div class="py-6">
    <h1 class="text-2xl font-bold">Dashboard Admin</h1>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
        <div>Total: {{ $totalDemandes }}</div>
        <div>Nouvelles: {{ $nouvellesDemandes }}</div>
        <div>En cours: {{ $enCours }}</div>
        <div>Traitées: {{ $traitees }}</div>
    </div>

    <h2 class="mt-8 font-semibold">Demandes récentes</h2>
    <ul>
        @foreach($demandesRecentes as $demande)
            <li>
                <a href="{{ route('admin.demandes.show', $demande) }}">
                    #{{ $demande->id }} - {{ $demande->nom }} - {{ $demande->service }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection