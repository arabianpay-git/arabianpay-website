<?php

namespace App\Filament\Resources\Polices\Pages;

use App\Filament\Resources\Polices\PolicesResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPolices extends ViewRecord
{
    protected static string $resource = PolicesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
