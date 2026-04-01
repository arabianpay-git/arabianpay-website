<?php

namespace App\Filament\Resources\HomePannerQAS\Pages;

use App\Filament\Resources\HomePannerQAS\HomePannerQAResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomePannerQAS extends ListRecords
{
    protected static string $resource = HomePannerQAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
