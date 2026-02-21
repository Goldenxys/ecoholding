<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DemandeClient;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'totalDemandes' => DemandeClient::count(),
            'nouvellesDemandes' => DemandeClient::where('statut', DemandeClient::STATUT_NOUVEAU)->count(),
            'enCours' => DemandeClient::where('statut', DemandeClient::STATUT_EN_COURS)->count(),
            'traitees' => DemandeClient::where('statut', DemandeClient::STATUT_TRAITE)->count(),
            'demandesRecentes' => DemandeClient::latest()->limit(5)->get(),
        ]);
    }
}
