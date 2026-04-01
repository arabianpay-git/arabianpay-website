<?php

namespace App\Filament\Resources\AboutUsMaps\Pages;

use App\Filament\Resources\AboutUsMaps\AboutUsMapResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutUsMap extends EditRecord
{
    protected static string $resource = AboutUsMapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
