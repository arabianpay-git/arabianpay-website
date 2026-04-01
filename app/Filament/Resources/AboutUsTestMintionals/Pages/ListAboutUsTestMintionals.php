<?php

namespace App\Filament\Resources\AboutUsTestMintionals\Pages;

use App\Filament\Resources\AboutUsTestMintionals\AboutUsTestMintionalResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutUsTestMintionals extends ListRecords
{
    protected static string $resource = AboutUsTestMintionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
