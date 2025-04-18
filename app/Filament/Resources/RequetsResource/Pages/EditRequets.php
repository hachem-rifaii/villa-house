<?php

namespace App\Filament\Resources\RequetsResource\Pages;

use App\Filament\Resources\RequetsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRequets extends EditRecord
{
    protected static string $resource = RequetsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
