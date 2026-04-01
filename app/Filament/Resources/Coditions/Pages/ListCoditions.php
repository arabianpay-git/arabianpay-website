<?php

namespace App\Filament\Resources\Coditions\Pages;

use App\Filament\Resources\Coditions\CoditionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCoditions extends ListRecords
{
    protected static string $resource = CoditionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
