<?php

namespace App\Filament\Resources\RequetsResource\Pages;

use App\Filament\Resources\RequetsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRequets extends ViewRecord
{
    protected static string $resource = RequetsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
