<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BukuResource\Pages;
use App\Models\Buku;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BukuResource extends Resource
{
    protected static ?string $model = Buku::class;

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_kategori')
                    ->relationship('kategori', 'nama_kategori')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->live(),
                TextInput::make('judul')
                    ->minLength(2)
                    ->maxLength(255)
                    ->required(),

                TextInput::make('penulis')
                    ->minLength(2)
                    ->maxLength(255)
                    ->required(),

                TextInput::make('penerbit')
                    ->minLength(2)
                    ->maxLength(255)
                    ->required(),

                TextInput::make('tahun_terbit')
                    ->numeric()
                    ->required(),

                TextInput::make('jumlah_stok')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kategori.nama_kategori')
                    ->searchable(),

                TextColumn::make('judul')
                    ->searchable(),

                TextColumn::make('penulis')
                    ->searchable(),

                TextColumn::make('penerbit')
                    ->searchable(),

                TextColumn::make('tahun_terbit')
                    ->searchable(),

                TextColumn::make('jumlah_stok')
                    ->numeric(),
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
            'index' => Pages\ListBukus::route('/'),
            'create' => Pages\CreateBuku::route('/create'),
            'edit' => Pages\EditBuku::route('/{record}/edit'),
        ];
    }
}
