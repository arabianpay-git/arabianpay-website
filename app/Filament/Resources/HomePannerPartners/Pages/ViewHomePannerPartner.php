<?php

namespace App\Filament\Resources\HomePannerPartners\Pages;

use App\Filament\Resources\HomePannerPartners\HomePannerPartnerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewHomePannerPartner extends ViewRecord
{
    protected static string $resource = HomePannerPartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
