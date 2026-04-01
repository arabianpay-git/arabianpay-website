<?php

namespace App\Filament\Resources\SuplierPanners\Pages;

use App\Filament\Resources\SuplierPanners\SuplierPannerResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSuplierPanner extends EditRecord
{
    protected static string $resource = SuplierPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            // DeleteAction::make(),
        ];
    }
}
