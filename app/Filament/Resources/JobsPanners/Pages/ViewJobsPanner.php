<?php

namespace App\Filament\Resources\JobsPanners\Pages;

use App\Filament\Resources\JobsPanners\JobsPannerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewJobsPanner extends ViewRecord
{
    protected static string $resource = JobsPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
