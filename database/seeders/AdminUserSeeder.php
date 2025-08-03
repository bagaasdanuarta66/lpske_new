<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Admin User
        User::firstOrCreate(
            ['email' => 'admin@lpske.uns.ac.id'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('lpskeadmin123'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );

        // Asisten User
        User::firstOrCreate(
            ['email' => 'asisten@lpske.uns.ac.id'],
            [
                'name' => 'Asisten User',
                'password' => Hash::make('asistenlpske123'),
                'role' => 'asisten',
                'email_verified_at' => now(),
            ]
        );

        // Anggota User
        User::firstOrCreate(
            ['email' => 'anggota@lpske.uns.ac.id'],
            [
                'name' => 'Anggota User',
                'password' => Hash::make('anggotalpske123'),
                'role' => 'anggota',
                'email_verified_at' => now(),
            ]
        );
    }
}
