<?php

namespace App\Filament\Resources\MerchantstepsPanners\Pages;

use App\Filament\Resources\MerchantstepsPanners\MerchantstepsPannerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMerchantstepsPanners extends ListRecords
{
    protected static string $resource = MerchantstepsPannerResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         CreateAction::make(),
    //     ];
    // }
}
