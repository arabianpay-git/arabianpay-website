<?php

namespace App\Filament\Resources\SuplierBottomPanners\Pages;

use App\Filament\Resources\SuplierBottomPanners\SuplierBottomPannerResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSuplierBottomPanner extends EditRecord
{
    protected static string $resource = SuplierBottomPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
