<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Compte propriétaire
        User::updateOrCreate(
            ['email' => 'admin@ecoholding.com'],
            [
                'name' => 'Admin ECO+HOLDING',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'actif' => true,
                'email_verified_at' => now(),
            ]
        );

        // Compte SOSSOU
        User::updateOrCreate(
            ['email' => 'orsinimelchisedek@gmail.com'],
            [
                'name' => 'SOSSOU',
                'password' => Hash::make('SOSSOU3010@'),
                'role' => 'admin',
                'actif' => true,
                'email_verified_at' => now(),
            ]
        );
    }
}
