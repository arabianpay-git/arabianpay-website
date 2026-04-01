<?php

namespace App\Filament\Resources\ContactPanners\Pages;

use App\Filament\Resources\ContactPanners\ContactPannerResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditContactPanner extends EditRecord
{
    protected static string $resource = ContactPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
