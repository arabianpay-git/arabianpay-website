<?php

namespace App\Filament\Resources\SuplierBottomPanners\Pages;

use App\Filament\Resources\SuplierBottomPanners\SuplierBottomPannerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSuplierBottomPanners extends ListRecords
{
    protected static string $resource = SuplierBottomPannerResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         CreateAction::make(),
    //     ];
    // }
}
