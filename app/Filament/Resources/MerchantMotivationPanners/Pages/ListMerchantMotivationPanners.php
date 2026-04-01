<?php

namespace App\Filament\Resources\MerchantMotivationPanners\Pages;

use App\Filament\Resources\MerchantMotivationPanners\MerchantMotivationPannerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMerchantMotivationPanners extends ListRecords
{
    protected static string $resource = MerchantMotivationPannerResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         CreateAction::make(),
    //     ];
    // }
}
