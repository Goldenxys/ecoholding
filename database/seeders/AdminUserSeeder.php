<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'orsinimelchisedek@gmail.com')->first();

        if ($user) {
            $user->forceFill([
                'name' => 'SOSSOU',
                'password' => Hash::make('SOSSOU3010@'),
                'role' => 'admin',
                'actif' => true,
            ])->save();
        } else {
            User::forceCreate([
                'email' => 'orsinimelchisedek@gmail.com',
                'name' => 'SOSSOU',
                'password' => Hash::make('SOSSOU3010@'),
                'role' => 'admin',
                'actif' => true,
            ]);
        }
    }
}
