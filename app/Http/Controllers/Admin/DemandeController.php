<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Demande;
use App\Models\DemandeClient;
use App\Mail\NouvelleDemandeAdminMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
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

        if ($request->filled('email')) {
            $query->where('email', 'like', '%'.$request->string('email').'%');
        }

        $demandes = $query
            ->with('agentTraitant:id,name,email')
            ->orderByDesc('date_creation')
            ->paginate(20)
            ->withQueryString();

        return view('admin.demandes.index', [
            'demandes' => $demandes,
            'filters' => [
                'statut' => (string) $request->get('statut', ''),
                'service' => (string) $request->get('service', ''),
                'email' => (string) $request->get('email', ''),
            ],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
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

        $demande = DemandeClient::create([
            ...$validated,
            'statut' => DemandeClient::STATUT_NOUVEAU,
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
     * Display the specified resource.
     */
    public function show(Demande $demande): View
    {
        return view('admin.demandes.show', [
            'demande' => $demande->load('agentTraitant:id,name,email'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Demande $demande): View
    {
        $telDigits = preg_replace('/\D+/', '', (string) $demande->telephone);

        if ($telDigits !== '' && !str_starts_with($telDigits, '225')) {
            $telDigits = '225'.$telDigits;
        }

        $messageDefaut = sprintf(
            "Bonjour %s, suite à votre demande du %s concernant '%s', nous vous contactons pour vous apporter des précisions.",
            $demande->nom,
            optional($demande->date_creation)->format('d/m/Y'),
            $demande->service
        );

        $whatsappUrl = $telDigits !== ''
            ? 'https://wa.me/'.$telDigits.'?text='.urlencode($messageDefaut)
            : null;

        return view('admin.demandes.edit', compact('demande', 'whatsappUrl'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Demande $demande): RedirectResponse
    {
        $validated = $request->validate([
            'statut' => ['required', 'in:nouveau,en_cours,traite'],
            'notes_admin' => ['nullable', 'string'],
            'date_souhaitee' => ['required', 'date'],
        ]);

        $demande->update([
            'statut' => $validated['statut'],
            'notes_admin' => $validated['notes_admin'] ?? $demande->notes_admin,
            'date_souhaitee' => $validated['date_souhaitee'],
            'traite_par' => auth()->id(),
        ]);

        return redirect()
            ->route('admin.demandes.edit', $demande)
            ->with('success', 'Demande mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
