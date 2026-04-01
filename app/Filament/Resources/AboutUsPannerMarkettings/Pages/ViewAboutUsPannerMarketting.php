<?php

namespace App\Filament\Resources\AboutUsPannerMarkettings\Pages;

use App\Filament\Resources\AboutUsPannerMarkettings\AboutUsPannerMarkettingResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAboutUsPannerMarketting extends ViewRecord
{
    protected static string $resource = AboutUsPannerMarkettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
