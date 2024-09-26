<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailMasukResource\Pages;
use App\Filament\Resources\DetailMasukResource\RelationManagers;
use App\Models\DetailMasuk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DetailMasukResource extends Resource
{
    protected static ?string $model = DetailMasuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_masuk')
                ->label('Id Masuk')
                ->required()
                ->maxLength('5'),
                Forms\Components\TextInput::make('Jumlah')
                ->label('Jumlah')
                ->required(),
                Forms\Components\TextInput::make('kode_barang_beli')
                ->label('Kode Barang Beli')
                ->required(),
                Forms\Components\Select::all()->pluck('kode_masuk')
                ->label('Kode Masuk')
                ->required()
                ->searchable,
                Forms\Components\TextInput::make('Subtotal')
                ->label('Subtotal')
                ->required(),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_masuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode_masuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode_barang_beli')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Jumlah')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Subtotal')->sortable()->searchable(),
                //
                //
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListDetailMasuks::route('/'),
            'create' => Pages\CreateDetailMasuk::route('/create'),
            'edit' => Pages\EditDetailMasuk::route('/{record}/edit'),
        ];
    }
}
