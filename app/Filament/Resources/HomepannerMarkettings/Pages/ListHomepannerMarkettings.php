<?php

namespace App\Filament\Resources\HomepannerMarkettings\Pages;

use App\Filament\Resources\HomepannerMarkettings\HomepannerMarkettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomepannerMarkettings extends ListRecords
{
    protected static string $resource = HomepannerMarkettingResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         CreateAction::make(),
    //     ];
    // }
}
