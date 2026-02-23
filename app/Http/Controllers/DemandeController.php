<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Mail\NouvelleDemandeAdminMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class DemandeController extends Controller
{
    /**
     * Dashboard with demand statistics.
     */
    public function dashboard(): View
    {
        return view('dashboard', [
            'totalDemandes' => Demande::count(),
            'nouvellesDemandes' => Demande::where('statut', Demande::STATUT_NOUVEAU)->count(),
            'enCours' => Demande::where('statut', Demande::STATUT_EN_COURS)->count(),
            'traitees' => Demande::where('statut', Demande::STATUT_TRAITE)->count(),
            'demandesRecentes' => Demande::latest('date_creation')->limit(5)->get(),
        ]);
    }

    /**
     * Display a listing of demands with filtering and pagination.
     */
    public function index(Request $request): View
    {
        $query = Demande::query();

        if ($request->filled('statut')) {
            $query->where('statut', $request->string('statut'));
        }

        if ($request->filled('service')) {
            $query->where('service', $request->string('service'));
        }

        if ($request->filled('recherche')) {
            $terme = $request->string('recherche');
            $query->where(function ($q) use ($terme) {
                $q->where('nom', 'like', "%{$terme}%")
                  ->orWhere('prenom', 'like', "%{$terme}%")
                  ->orWhere('email', 'like', "%{$terme}%")
                  ->orWhere('telephone', 'like', "%{$terme}%");
            });
        }

        $demandes = $query
            ->orderByDesc('date_creation')
            ->paginate(15)
            ->withQueryString();

        return view('demandes.index', [
            'demandes' => $demandes,
            'filters' => [
                'statut' => (string) $request->get('statut', ''),
                'service' => (string) $request->get('service', ''),
                'recherche' => (string) $request->get('recherche', ''),
            ],
        ]);
    }

    /**
     * Store a new demand (public AJAX).
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'nom' => ['required', 'string', 'max:120'],
            'prenom' => ['nullable', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:180'],
            'telephone' => ['required', 'string', 'max:40'],
            'service' => ['required', 'string', 'max:120'],
            'date_souhaitee' => ['nullable', 'date'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        $demande = Demande::create([
            ...$validated,
            'statut' => Demande::STATUT_NOUVEAU,
        ]);

        if (config('mail.admin_address')) {
            Mail::to(config('mail.admin_address'))->send(new NouvelleDemandeAdminMail($demande));
        }

        return response()->json([
            'success' => true,
            'message' => 'Votre demande a été envoyée avec succès! Nous vous contacterons bientôt.',
        ]);
    }

    /**
     * Display the specified demand.
     */
    public function show(Demande $demande): View
    {
        $telDigits = preg_replace('/\D+/', '', (string) $demande->telephone);
        if ($telDigits !== '' && !str_starts_with($telDigits, '225')) {
            $telDigits = '225' . $telDigits;
        }

        $messageDefaut = sprintf(
            "Bonjour %s, suite à votre demande du %s concernant '%s', nous vous contactons pour vous apporter des précisions.",
            $demande->nom,
            optional($demande->date_creation)->format('d/m/Y'),
            $demande->service
        );

        $whatsappUrl = $telDigits !== ''
            ? 'https://wa.me/' . $telDigits . '?text=' . urlencode($messageDefaut)
            : null;

        return view('demandes.show', compact('demande', 'whatsappUrl'));
    }

    /**
     * Update the specified demand (status + notes).
     */
    public function update(Request $request, Demande $demande): RedirectResponse
    {
        $validated = $request->validate([
            'statut' => ['required', 'in:nouveau,en_cours,traite'],
            'notes_admin' => ['nullable', 'string'],
        ]);

        $demande->update([
            'statut' => $validated['statut'],
            'notes_admin' => $validated['notes_admin'] ?? $demande->notes_admin,
            'traite_par' => auth()->id(),
        ]);

        return redirect()
            ->route('demandes.show', $demande)
            ->with('success', 'Demande mise à jour avec succès.');
    }
}
