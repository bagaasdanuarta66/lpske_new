<?php

namespace App\Filament\Resources\AnggotaAkunResource\Pages;

use App\Filament\Resources\AnggotaAkunResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateAnggota extends CreateRecord
{
    protected static string $resource = AnggotaAkunResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Simpan password plain untuk session
        if (isset($data['password'])) {
            session(['temp_plain_password' => $data['password']]);
        }

        // PAKSA role dan email_verified_at
        $data['role'] = 'anggota';
        $data['email_verified_at'] = now();
        
        return $data;
    }

    protected function afterCreate(): void
    {
        // Ambil password plain dari session
        $plainPassword = session('temp_plain_password');
        
        if ($plainPassword) {
            // Simpan ke temp passwords session
            $tempPasswords = session('temp_passwords', []);
            $tempPasswords[$this->record->id] = $plainPassword;
            session(['temp_passwords' => $tempPasswords]);
            
            // Hapus password sementara
            session()->forget('temp_plain_password');
        }

        // DOUBLE CHECK: Pastikan data benar tersimpan
        if ($this->record->role !== 'anggota' || !$this->record->email_verified_at) {
            $this->record->update([
                'role' => 'anggota',
                'email_verified_at' => now()
            ]);
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Akun anggota berhasil dibuat!';
    }
}