<?php

namespace App\Filament\Resources\PropertyResource\Widgets;

use App\Models\Property as ModelsProperty;
use Filament\Widgets\ChartWidget;

class Property extends ChartWidget
{
    protected static ?string $heading = 'Total Properties Over Time';

    protected function getData(): array
    {
        $totalProperties = ModelsProperty::count();

        return [
            'datasets' => [
                [
                    'label' => 'Total Properties',
                    'data' => [$totalProperties],
                ],
            ],
            'labels' => ['Current Total'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
