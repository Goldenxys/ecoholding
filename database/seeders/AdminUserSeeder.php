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
        $admin1 = User::updateOrCreate(
            ['email' => 'admin@ecoholding.com'],
            [
                'name'     => 'Admin ECO+HOLDING',
                'password' => Hash::make('admin123'),
                'role'     => 'admin',
                'actif'    => true,
            ]
        );
        // forceFill contourne $fillable pour email_verified_at
        if (is_null($admin1->email_verified_at)) {
            $admin1->forceFill(['email_verified_at' => now()])->save();
        }

        // Compte SOSSOU
        $admin2 = User::updateOrCreate(
            ['email' => 'orsinimelchisedek@gmail.com'],
            [
                'name'     => 'SOSSOU',
                'password' => Hash::make('SOSSOU3010@'),
                'role'     => 'admin',
                'actif'    => true,
            ]
        );
        if (is_null($admin2->email_verified_at)) {
            $admin2->forceFill(['email_verified_at' => now()])->save();
        }
    }
}
