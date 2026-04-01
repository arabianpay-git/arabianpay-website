<?php

namespace App\Filament\Resources\SupportContacts\Pages;

use App\Filament\Resources\SupportContacts\SupportContactResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSupportContact extends ViewRecord
{
    protected static string $resource = SupportContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
