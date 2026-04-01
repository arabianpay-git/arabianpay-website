<?php

namespace App\Filament\Resources\AbutUsBottomPanners\Pages;

use App\Filament\Resources\AbutUsBottomPanners\AbutUsBottomPannerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAbutUsBottomPanner extends ViewRecord
{
    protected static string $resource = AbutUsBottomPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
