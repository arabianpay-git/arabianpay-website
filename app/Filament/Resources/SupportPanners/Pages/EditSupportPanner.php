<?php

namespace App\Filament\Resources\SupportPanners\Pages;

use App\Filament\Resources\SupportPanners\SupportPannerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSupportPanner extends EditRecord
{
    protected static string $resource = SupportPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
