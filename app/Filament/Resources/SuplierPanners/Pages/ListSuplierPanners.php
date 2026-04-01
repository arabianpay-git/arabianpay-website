<?php

namespace App\Filament\Resources\SuplierPanners\Pages;

use App\Filament\Resources\SuplierPanners\SuplierPannerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSuplierPanners extends ListRecords
{
    protected static string $resource = SuplierPannerResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         CreateAction::make(),
    //     ];
    // }
}
