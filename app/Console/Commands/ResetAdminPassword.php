<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class ResetAdminPassword extends Command
{
    protected $signature = 'admin:reset-password {email?}';

    protected $description = 'Réinitialiser le mot de passe admin avec hash Bcrypt';

    public function handle(): int
    {
        $email = $this->argument('email') ?? $this->ask('Email de l\'administrateur');

        $user = User::where('email', $email)->first();

        if (! $user) {
            $this->error("Aucun utilisateur trouvé avec l'email: {$email}");
            return self::FAILURE;
        }

        $password = $this->secret('Nouveau mot de passe');

        if (! $password || strlen($password) < 6) {
            $this->error('Le mot de passe doit contenir au moins 6 caractères.');
            return self::FAILURE;
        }

        $user->update([
            'password' => Hash::make($password),
            'email_verified_at' => $user->email_verified_at ?? now(),
        ]);

        $this->info("Mot de passe réinitialisé avec succès pour: {$user->name} ({$email})");
        $this->info("Le mot de passe utilise maintenant le hash Bcrypt compatible Laravel.");

        return self::SUCCESS;
    }
}
