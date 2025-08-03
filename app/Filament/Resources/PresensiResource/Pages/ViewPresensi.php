<?php

namespace App\Filament\Resources\PresensiResource\Pages;

use App\Filament\Resources\PresensiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPresensi extends ViewRecord
{
    protected static string $resource = PresensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make()
                ->label('Edit')
                ->icon('heroicon-o-pencil')
                ->hidden(!auth('admin')->check()),
            Actions\DeleteAction::make()
                ->label('Hapus')
                ->icon('heroicon-o-trash')
                ->hidden(!auth('admin')->check()),
            Actions\Action::make('kembali')
                ->label('Kembali')
                ->url(fn () => PresensiResource::getUrl('index'))
                ->color('gray')
                ->icon('heroicon-o-arrow-left'),
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            \Filament\Forms\Components\Section::make()
                ->schema([
                    \Filament\Forms\Components\TextInput::make('activity')
                        ->label('Aktivitas')
                        ->disabled()
                        ->columnSpanFull(),
                    \Filament\Forms\Components\Textarea::make('description')
                        ->label('Deskripsi')
                        ->disabled()
                        ->columnSpanFull(),
                    \Filament\Forms\Components\Fieldset::make('Informasi Waktu')
                        ->schema([
                            \Filament\Forms\Components\TextInput::make('date')
                                ->label('Tanggal')
                                ->formatStateUsing(fn ($state) => $state ? \Carbon\Carbon::parse($state)->isoFormat('dddd, D MMMM YYYY') : null)
                                ->disabled(),
                            \Filament\Forms\Components\TextInput::make('time')
                                ->label('Waktu')
                                ->formatStateUsing(fn ($state) => $state ? \Carbon\Carbon::parse($state)->format('H:i:s') : null)
                                ->disabled(),
                        ])->columns(2),
                    \Filament\Forms\Components\TextInput::make('asisten.name')
                        ->label('Asisten')
                        ->disabled(),
                ])
        ];
    }
}