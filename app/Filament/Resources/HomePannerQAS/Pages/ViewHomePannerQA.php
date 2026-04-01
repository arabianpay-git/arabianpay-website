<?php

namespace App\Filament\Resources\HomePannerQAS\Pages;

use App\Filament\Resources\HomePannerQAS\HomePannerQAResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewHomePannerQA extends ViewRecord
{
    protected static string $resource = HomePannerQAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
