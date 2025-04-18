<?php

namespace App\Filament\Resources\RequetsResource\Pages;

use App\Filament\Resources\RequetsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRequets extends ListRecords
{
    protected static string $resource = RequetsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
