<?php

namespace App\Filament\Resources\ContactPanners\Pages;

use App\Filament\Resources\ContactPanners\ContactPannerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactPanners extends ListRecords
{
    protected static string $resource = ContactPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
