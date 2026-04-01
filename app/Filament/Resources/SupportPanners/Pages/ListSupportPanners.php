<?php

namespace App\Filament\Resources\SupportPanners\Pages;

use App\Filament\Resources\SupportPanners\SupportPannerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSupportPanners extends ListRecords
{
    protected static string $resource = SupportPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
