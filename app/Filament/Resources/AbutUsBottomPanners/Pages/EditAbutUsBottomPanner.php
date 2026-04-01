<?php

namespace App\Filament\Resources\AbutUsBottomPanners\Pages;

use App\Filament\Resources\AbutUsBottomPanners\AbutUsBottomPannerResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAbutUsBottomPanner extends EditRecord
{
    protected static string $resource = AbutUsBottomPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
