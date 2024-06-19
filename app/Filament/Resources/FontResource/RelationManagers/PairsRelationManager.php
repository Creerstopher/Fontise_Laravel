<?php

namespace App\Filament\Resources\FontResource\RelationManagers;

use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class PairsRelationManager extends RelationManager
{
    protected static string $relationship = 'firstPair';
    protected static ?string $title = 'Пары';
    protected static ?string $pluralLabel = 'Пара';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('first_id')
                    ->label('Шрифт 1')
                    ->relationship('first', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('second_id')
                    ->label('Шрифт 2')
                    ->relationship('second', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID'),
                Tables\Columns\TextColumn::make('first.name')
                    ->label('Шрифт 1'),
                Tables\Columns\TextColumn::make('second.name')
                    ->label('Шрифт 2'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

//    public function query(): Builder
//    {
//        /** @var Font $font */
//        $font = $this->ownerRecord;
//        return Pair::query()->where('first_id', $font->id)->orWhere('second_id', $font->id);
//    }
}
