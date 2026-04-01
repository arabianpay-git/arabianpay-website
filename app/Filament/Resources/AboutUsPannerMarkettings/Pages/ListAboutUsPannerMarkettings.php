<?php

namespace App\Filament\Resources\AboutUsPannerMarkettings\Pages;

use App\Filament\Resources\AboutUsPannerMarkettings\AboutUsPannerMarkettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutUsPannerMarkettings extends ListRecords
{
    protected static string $resource = AboutUsPannerMarkettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
