<?php

namespace App\Filament\Resources\JobsPanners\Pages;

use App\Filament\Resources\JobsPanners\JobsPannerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJobsPanners extends ListRecords
{
    protected static string $resource = JobsPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
