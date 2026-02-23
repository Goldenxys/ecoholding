<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DemandeController;
use Illuminate\Support\Facades\Route;

// ── Frontend (public) ──────────────────────────────────────────────
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/presentation', [FrontendController::class, 'presentation'])->name('presentation');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/prestige-immobilier', [FrontendController::class, 'prestigeImmobilier'])->name('prestige-immobilier');
Route::get('/translogistique', [FrontendController::class, 'translogistique'])->name('translogistique');
Route::get('/vision-valeurs', [FrontendController::class, 'visionValeurs'])->name('vision-valeurs');
Route::get('/equipe', [FrontendController::class, 'equipe'])->name('equipe');
Route::get('/regime-fiscal', [FrontendController::class, 'regimeFiscal'])->name('regime-fiscal');

// ── Contact form (public, AJAX) ───────────────────────────────────
Route::post('/demandes', [DemandeController::class, 'store'])->name('demandes.store');

// ── Espace authentifié (Breeze) ───────────────────────────────────
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard avec stats des demandes
    Route::get('/dashboard', [DemandeController::class, 'dashboard'])->name('dashboard');

    // Gestion des demandes
    Route::get('/demandes', [DemandeController::class, 'index'])->name('demandes.index');
    Route::get('/demandes/{demande}', [DemandeController::class, 'show'])->name('demandes.show');
    Route::put('/demandes/{demande}', [DemandeController::class, 'update'])->name('demandes.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
