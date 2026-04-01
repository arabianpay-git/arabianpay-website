<?php

namespace App\Filament\Resources\SuplierBottomPanners\Pages;

use App\Filament\Resources\SuplierBottomPanners\SuplierBottomPannerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSuplierBottomPanner extends ViewRecord
{
    protected static string $resource = SuplierBottomPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
