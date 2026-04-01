<?php

namespace App\Filament\Resources\Coditions\Pages;

use App\Filament\Resources\Coditions\CoditionResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCodition extends ViewRecord
{
    protected static string $resource = CoditionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
