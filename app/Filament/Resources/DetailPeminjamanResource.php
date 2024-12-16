<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\DetailPeminjaman;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DetailPeminjamanResource\Pages;
use App\Filament\Resources\DetailPeminjamanResource\RelationManagers;

class DetailPeminjamanResource extends Resource
{
    protected static ?string $model = DetailPeminjaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_peminjaman')
                    ->relationship('peminjaman', 'id_peminjaman')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->live(),

                TextInput::make('jumlah_buku')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jumlah_buku')
                    ->numeric(),
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
            'index' => Pages\ListDetailPeminjamen::route('/'),
            'create' => Pages\CreateDetailPeminjaman::route('/create'),
            'view' => Pages\ViewDetailPeminjaman::route('/{record}'),
            'edit' => Pages\EditDetailPeminjaman::route('/{record}/edit'),
        ];
    }
}
