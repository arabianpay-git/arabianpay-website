<?php

namespace App\Filament\Resources\FeturesPanners\Pages;

use App\Filament\Resources\FeturesPanners\FeturesPannerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFeturesPanner extends ViewRecord
{
    protected static string $resource = FeturesPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
