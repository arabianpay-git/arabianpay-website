<?php

namespace App\Filament\Resources\AboutUsTestMintionals\Pages;

use App\Filament\Resources\AboutUsTestMintionals\AboutUsTestMintionalResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAboutUsTestMintional extends ViewRecord
{
    protected static string $resource = AboutUsTestMintionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
