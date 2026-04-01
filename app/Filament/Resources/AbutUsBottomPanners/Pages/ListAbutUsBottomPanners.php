<?php

namespace App\Filament\Resources\AbutUsBottomPanners\Pages;

use App\Filament\Resources\AbutUsBottomPanners\AbutUsBottomPannerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAbutUsBottomPanners extends ListRecords
{
    protected static string $resource = AbutUsBottomPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
