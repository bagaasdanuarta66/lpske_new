<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlumniStoryResource\Pages;
use App\Filament\Resources\AlumniStoryResource\RelationManagers;
use App\Models\AlumniStory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class AlumniStoryResource extends Resource
{
    protected static ?string $model = AlumniStory::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Alumni Story';
    protected static ?string $modelLabel = 'Alumni Story';
    protected static ?string $pluralModelLabel = 'Alumni Stories';
    protected static ?string $navigationGroup = 'Manajemen Website';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Alumni')
                    ->description('Isi informasi lengkap alumni untuk ditampilkan di halaman Alumni Story')
                    ->schema([
                        Forms\Components\FileUpload::make('foto')
                            ->label('Foto Profil')
                            ->image()
                            ->directory('alumni')
                            ->imageEditor()
                            ->columnSpanFull()
                            ->maxSize(2048)
                            ->helperText('Ukuran maksimal 2MB. Format: JPG, JPEG, atau PNG'),
                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('angkatan')
                            ->label('Tahun Angkatan')
                            ->required()
                            ->maxLength(10)
                            ->placeholder('Contoh: 2022'),
                        Forms\Components\TextInput::make('pekerjaan')
                            ->label('Posisi Pekerjaan')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Software Engineer'),
                        Forms\Components\TextInput::make('perusahaan')
                            ->label('Nama Perusahaan')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Nama perusahaan tempat bekerja'),
                        Forms\Components\Textarea::make('testimoni')
                            ->label('Cerita/Kesimpulan')
                            ->required()
                            ->columnSpanFull()
                            ->helperText('Bagikan pengalaman atau pesan inspiratif untuk adik-adik angkatan')
                            ->maxLength(1000),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Tampilkan di Halaman Utama')
                            ->helperText('Aktifkan untuk menampilkan di halaman utama')
                            ->required()
                            ->default(true),
                    ])
                    ->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')
                    ->circular()
                    ->defaultImageUrl(url('/images/default-avatar.png'))
                    ->label('Foto'),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Alumni'),
                Tables\Columns\TextColumn::make('angkatan')
                    ->searchable()
                    ->sortable()
                    ->label('Angkatan'),
                Tables\Columns\TextColumn::make('pekerjaan')
                    ->searchable()
                    ->label('Pekerjaan'),
                Tables\Columns\TextColumn::make('perusahaan')
                    ->label('Perusahaan'),
                Tables\Columns\TextColumn::make('testimoni')
                    ->limit(30)
                    ->searchable()
                    ->label('Testimoni'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->sortable()
                    ->label('Aktif'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('angkatan')
                    ->options(fn () => AlumniStory::query()->pluck('angkatan', 'angkatan')->unique()->toArray()),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status Aktif'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAlumniStory::route('/'),
            'create' => Pages\CreateAlumniStory::route('/create'),
            'edit' => Pages\EditAlumniStory::route('/{record}/edit'),
        ];
    }
}
