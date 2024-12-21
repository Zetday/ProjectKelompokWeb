<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\KategoriBuku;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KategoriBukuResource\Pages;
use App\Filament\Resources\KategoriBukuResource\RelationManagers;
use App\Filament\Resources\KategoriBukuResource\Pages\EditKategoriBuku;
use App\Filament\Resources\KategoriBukuResource\Pages\ViewKategoriBuku;
use App\Filament\Resources\KategoriBukuResource\Pages\ListKategoriBukus;
use App\Filament\Resources\KategoriBukuResource\Pages\CreateKategoriBuku;

class KategoriBukuResource extends Resource
{
    protected static ?string $model = KategoriBuku::class;
    
    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_kategori')
                    ->minLength(2)
                    ->maxLength(255)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_kategori')
                    ->label('Kategori Buku')
                    ->searchable(),
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
            'index' => Pages\ListKategoriBukus::route('/'),
            'create' => Pages\CreateKategoriBuku::route('/create'),
            'view' => Pages\ViewKategoriBuku::route('/{record}'),
            'edit' => Pages\EditKategoriBuku::route('/{record}/edit'),
        ];
    }
}
