<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'orsinimelchisedek@gmail.com'],
            [
                'name' => 'SOSSOU',
                'password' => 'SOSSOU3010@',
                'role' => 'admin',
                'actif' => true,
            ]
        );
    }
}
