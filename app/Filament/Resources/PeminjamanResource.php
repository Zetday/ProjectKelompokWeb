<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Peminjaman;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PeminjamanResource\Pages;
use App\Filament\Resources\PeminjamanResource\RelationManagers;
use App\Filament\Resources\PeminjamanResource\Pages\EditPeminjaman;
use App\Filament\Resources\PeminjamanResource\Pages\ListPeminjamen;
use App\Filament\Resources\PeminjamanResource\Pages\CreatePeminjaman;
use BladeUI\Icons\Components\Icon;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\IconColumn;

class PeminjamanResource extends Resource
{
    protected static ?string $model = Peminjaman::class;

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_anggota')
                    ->relationship('anggota', 'nama')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->live(),

                Select::make('id_buku')
                    ->relationship('buku', 'judul')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->live(),

                DatePicker::make('tanggal_pinjam')
                    ->placeholder('MM/DD/YYYY')
                    ->required(),

                DatePicker::make('tanggal_kembali')
                    ->placeholder('MM/DD/YYYY')
                    ->required(),

                Select::make('status')
                    ->options([
                        'Dipinjam' => 'Dipinjam',
                        'Dikembalikan' => 'Dikembalikan',
                    ])
                    ->native(false)
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('anggota.nama')
                    ->searchable(),

                TextColumn::make('buku.judul')
                    ->searchable(),

                TextColumn::make('tanggal_pinjam')
                    ->date(),

                TextColumn::make('tanggal_kembali')
                    ->date(),

                    
                    TextColumn::make('anggota.no_telepon')
                    ->prefix('0')
                    ->label('No Telepon'),
                    
                    TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Dipinjam' => 'warning',
                        'Dikembalikan' => 'success',
                        }),
                    ])
            ->filters([
                //
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
            'index' => Pages\ListPeminjamen::route('/'),
            'create' => Pages\CreatePeminjaman::route('/create'),
            'edit' => Pages\EditPeminjaman::route('/{record}/edit'),
        ];
    }
}
