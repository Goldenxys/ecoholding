<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DemandeController;
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

// ── Auth dashboard ─────────────────────────────────────────────────
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ── Admin ──────────────────────────────────────────────────────────
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('demandes', DemandeController::class)
            ->only(['index', 'show', 'edit', 'update']);
    });

require __DIR__.'/auth.php';
