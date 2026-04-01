<?php

namespace App\Filament\Resources\MerchantstepsPanners\Pages;

use App\Filament\Resources\MerchantstepsPanners\MerchantstepsPannerResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMerchantstepsPanner extends EditRecord
{
    protected static string $resource = MerchantstepsPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            // DeleteAction::make(),
        ];
    }
}
