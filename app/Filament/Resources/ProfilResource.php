<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Profil;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProfilResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProfilResource\RelationManagers;

class ProfilResource extends Resource
{
    protected static ?string $model = Profil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('NIM')
                    ->minLength(2)
                    ->maxLength(10)
                    ->label('NIM')
                    ->required(),

                TextInput::make('nama_mahasiswa')
                    ->minLength(3)
                    ->maxLength(50)
                    ->required(),

                TextInput::make('kelas')
                    ->minLength(2)
                    ->maxLength(20)
                    ->required(),

                Textarea::make('deskripsi')
                    ->rows(3)
                    ->required()
                    ->maxLength(255),

                FileUpload::make('foto')
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')->size(80),

                TextColumn::make('nama_mahasiswa')
                    ->searchable(),

                TextColumn::make('kelas'),

                TextColumn::make('deskripsi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListProfils::route('/'),
            'create' => Pages\CreateProfil::route('/create'),
            'view' => Pages\ViewProfil::route('/{record}'),
            'edit' => Pages\EditProfil::route('/{record}/edit'),
        ];
    }
}
