<?php

namespace App\Filament\Resources\HomeBottomPanners\Pages;

use App\Filament\Resources\HomeBottomPanners\HomeBottomPannerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewHomeBottomPanner extends ViewRecord
{
    protected static string $resource = HomeBottomPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
