<?php

namespace App\Filament\Resources\AboutUsMaps\Pages;

use App\Filament\Resources\AboutUsMaps\AboutUsMapResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutUsMaps extends ListRecords
{
    protected static string $resource = AboutUsMapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
