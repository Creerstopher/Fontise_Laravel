<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FontResource\Pages;
use App\Models\Font;
use App\Models\Language;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class FontResource extends Resource
{
    protected static ?string $model = Font::class;
    protected static ?string $label = 'Шрифт';
    protected static ?string $pluralLabel = 'Шрифты';
    protected static ?string $navigationGroup = 'Шрифты';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Название')
                    ->required(),

                TextInput::make('price')
                    ->label('Цена')
                    ->required()
                    ->numeric()
                    ->inputMode('decimal'),

                FileUpload::make('zip_path')
                    ->label('Архив')
                    ->disk('public')
                    ->directory('zip-fonts')
                    ->preserveFilenames()
                    ->required(),

                FileUpload::make('front_path')
                    ->label('Шрифт для фронта')
                    ->disk('public')
                    ->directory('front-fonts')
                    ->preserveFilenames()
                    ->required(),

                Select::make('category_id')
                    ->label('Категория')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('license_id')
                    ->label('Лицензия')
                    ->relationship('license', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Toggle::make('is_enable')
                    ->label('Включен')
                    ->onColor('success'),

                MarkdownEditor::make('information')
                    ->label('Описание')
                    ->required()
                    ->columnSpan(2)
                    ->required()
                    ->minLength(20),

                Repeater::make('fontLanguages')
                    ->label('Поддерживаемые языки')
                    ->relationship('fontLanguages')
                    ->schema([
                        Select::make('language_id')
                            ->relationship('language', 'name')
                            ->label('Язык')
                            ->searchable()
                            ->preload()
                            ->required(),
                    ]),

                Repeater::make('fontStyles')
                    ->label('Поддерживаемые стили')
                    ->relationship('fontStyles')
                    ->schema([
                        Select::make('style_id')
                            ->relationship('style', 'name')
                            ->label('Стиль')
                            ->searchable()
                            ->preload()
                            ->required(),
                    ])
            ]);
    }

    /**
     * @throws \Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->numeric()
                    ->label('ID'),

                TextColumn::make('name')
                    ->label('Название')
                    ->searchable(),

                TextColumn::make('price')
                    ->numeric()
                    ->label('Цена'),

                TextColumn::make('category.name')
                    ->label('Категория'),

                ToggleColumn::make('is_enable')
                    ->disabled()
                    ->label('Активен')

            ])
            ->filters([
                Filter::make('is_enable')
                    ->query(fn (Builder $query): Builder => $query->where('is_enable', false))
                    ->label('Выключенные'),

                SelectFilter::make('category')
                    ->label('Категория')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload(),

                SelectFilter::make('license')
                    ->label('Лицензия')
                    ->relationship('license', 'name')
                    ->searchable()
                    ->preload(),

                SelectFilter::make('languages')
                    ->label('Языки')
                    ->relationship('languages', 'name')
                    ->searchable()
                    ->multiple()
                    ->preload(),

                SelectFilter::make('styles')
                    ->label('Стили')
                    ->relationship('styles', 'weight')
                    ->searchable()
                    ->multiple()
                    ->preload(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //                Tables\Actions\BulkActionGroup::make([
                //                    Tables\Actions\DeleteBulkAction::make(),
                //                ]),
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
            'index' => Pages\ListFonts::route('/'),
            'create' => Pages\CreateFont::route('/create'),
            'edit' => Pages\EditFont::route('/{record}/edit'),
            'view' => Pages\ViewFont::route('/{record}'),
        ];
    }
}
