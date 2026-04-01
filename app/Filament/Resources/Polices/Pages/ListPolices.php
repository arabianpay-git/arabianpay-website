<?php

namespace App\Filament\Resources\Polices\Pages;

use App\Filament\Resources\Polices\PolicesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPolices extends ListRecords
{
    protected static string $resource = PolicesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
