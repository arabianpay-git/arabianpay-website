<?php

namespace App\Filament\Resources\FeturesPanners\Pages;

use App\Filament\Resources\FeturesPanners\FeturesPannerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFeturesPanners extends ListRecords
{
    protected static string $resource = FeturesPannerResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         CreateAction::make(),
    //     ];
    // }
}
