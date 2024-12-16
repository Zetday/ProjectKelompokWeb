<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Anggota;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AnggotaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AnggotaResource\RelationManagers;

class AnggotaResource extends Resource
{
    protected static ?string $model = Anggota::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->minLength(2)
                    ->maxLength(255)
                    ->required(),

                Forms\Components\TextInput::make('email')
                    ->minLength(2)
                    ->maxLength(255)
                    ->required(),

                Forms\Components\TextInput::make('no_telepon')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('alamat')
                    ->required(),

                Forms\Components\DatePicker::make('tanggal_daftar')
                    ->placeholder('MM/DD/YYYY')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),

                TextColumn::make('email'),

                TextColumn::make('no_telepon')
                    ->numeric(),

                TextColumn::make('alamat'),

                TextColumn::make('tanggal_daftar')
                    ->date()
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
            'index' => Pages\ListAnggotas::route('/'),
            'create' => Pages\CreateAnggota::route('/create'),
            'edit' => Pages\EditAnggota::route('/{record}/edit'),
        ];
    }
}
