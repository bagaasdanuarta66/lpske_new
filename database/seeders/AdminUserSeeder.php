<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create roles if they don't exist
        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'admin']);
        $asistenRole = Role::firstOrCreate(['name' => 'asisten', 'guard_name' => 'admin']);
        $anggotaRole = Role::firstOrCreate(['name' => 'anggota', 'guard_name' => 'admin']);

        // Admin User
        $admin = User::firstOrCreate(
            ['email' => 'admin@lpske.uns.ac.id'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('lpskeadmin123'),
                'email_verified_at' => now(),
            ]
        );
        $admin->assignRole($adminRole);

        // Asisten User
        $asisten = User::firstOrCreate(
            ['email' => 'asisten@lpske.uns.ac.id'],
            [
                'name' => 'Asisten User',
                'password' => Hash::make('asistenlpske123'),
                'email_verified_at' => now(),
            ]
        );
        $asisten->assignRole($asistenRole);

        // Anggota User
        $anggota = User::firstOrCreate(
            ['email' => 'anggota@lpske.uns.ac.id'],
            [
                'name' => 'Anggota User',
                'password' => Hash::make('anggotalpske123'),
                'email_verified_at' => now(),
            ]
        );
        $anggota->assignRole($anggotaRole);
    }
}
