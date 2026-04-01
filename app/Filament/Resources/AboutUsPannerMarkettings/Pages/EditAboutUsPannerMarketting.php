<?php

namespace App\Filament\Resources\AboutUsPannerMarkettings\Pages;

use App\Filament\Resources\AboutUsPannerMarkettings\AboutUsPannerMarkettingResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutUsPannerMarketting extends EditRecord
{
    protected static string $resource = AboutUsPannerMarkettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
