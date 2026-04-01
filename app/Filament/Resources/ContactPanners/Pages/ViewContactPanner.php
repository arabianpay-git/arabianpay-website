<?php

namespace App\Filament\Resources\ContactPanners\Pages;

use App\Filament\Resources\ContactPanners\ContactPannerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewContactPanner extends ViewRecord
{
    protected static string $resource = ContactPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
