<?php

namespace App\Filament\Resources\HomepannerMarkettings\Pages;

use App\Filament\Resources\HomepannerMarkettings\HomepannerMarkettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHomepannerMarketting extends EditRecord
{
    protected static string $resource = HomepannerMarkettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
