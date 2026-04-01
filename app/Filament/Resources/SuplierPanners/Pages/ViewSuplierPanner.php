<?php

namespace App\Filament\Resources\SuplierPanners\Pages;

use App\Filament\Resources\SuplierPanners\SuplierPannerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSuplierPanner extends ViewRecord
{
    protected static string $resource = SuplierPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
