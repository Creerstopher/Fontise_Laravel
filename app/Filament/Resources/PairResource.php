<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PairResource\Pages;
//use App\Filament\Resources\PairResource\RelationManagers;
use App\Models\Pair;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PairResource extends Resource
{
    protected static ?string $model = Pair::class;

    protected static ?string $label = 'Пара';
    protected static ?string $pluralLabel = 'Пары';
    protected static ?string $navigationGroup = 'Шрифты';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('first_id')
                    ->relationship('first', 'name')
                    ->label('Шрифт 1')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('second_id')
                    ->relationship('second', 'name')
                    ->label('Шрифт 2')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }

    /**
     * @throws \Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first.name')
                    ->label('Шрифт 1'),
                TextColumn::make('second.name')
                    ->label('Шрифт 2'),
            ])
            ->filters([
                SelectFilter::make('first')
                    ->label('Шрифт 1')
                    ->relationship('first', 'name')
                    ->searchable()
                    ->preload(),
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
            'index' => Pages\ListPairs::route('/'),
            'create' => Pages\CreatePair::route('/create'),
            'edit' => Pages\EditPair::route('/{record}/edit'),
        ];
    }
}
