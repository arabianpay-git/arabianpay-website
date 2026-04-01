<?php

namespace App\Filament\Resources\MerchantstepsPanners\Pages;

use App\Filament\Resources\MerchantstepsPanners\MerchantstepsPannerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMerchantstepsPanner extends ViewRecord
{
    protected static string $resource = MerchantstepsPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
