<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnggotaResource\Pages;
use App\Models\Anggota;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AnggotaResource extends Resource
{
    protected static ?string $model = Anggota::class;

    protected static ?int $navigationSort = 3;

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
                    ->prefix('+62')
                    ->tel()
                    ->required(),

                Forms\Components\Textarea::make('alamat')
                    ->rows(3)
                    ->required()
                    ->maxLength(255),

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

                TextColumn::make('email')
                    ->icon('heroicon-m-envelope')
                    ->iconColor('primary'),

                TextColumn::make('no_telepon')
                    ->prefix('0'),

                TextColumn::make('alamat'),

                TextColumn::make('tanggal_daftar')
                    ->date()
            ])
            ->filters([])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
