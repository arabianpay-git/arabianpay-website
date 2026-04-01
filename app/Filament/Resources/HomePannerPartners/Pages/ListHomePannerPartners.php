<?php

namespace App\Filament\Resources\HomePannerPartners\Pages;

use App\Filament\Resources\HomePannerPartners\HomePannerPartnerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomePannerPartners extends ListRecords
{
    protected static string $resource = HomePannerPartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
