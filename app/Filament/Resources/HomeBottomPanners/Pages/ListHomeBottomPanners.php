<?php

namespace App\Filament\Resources\HomeBottomPanners\Pages;

use App\Filament\Resources\HomeBottomPanners\HomeBottomPannerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomeBottomPanners extends ListRecords
{
    protected static string $resource = HomeBottomPannerResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         CreateAction::make(),
    //     ];
    // }
}
