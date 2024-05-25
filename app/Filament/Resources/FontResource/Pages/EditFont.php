<?php

namespace App\Filament\Resources\FontResource\Pages;

use App\Filament\Resources\FontResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFont extends EditRecord
{
    protected static string $resource = FontResource::class;
    protected static ?string $title = 'Редактирование шрифта';

    protected function getHeaderActions(): array
    {
        return [
            //            Actions\DeleteAction::make(),
        ];
    }
}
