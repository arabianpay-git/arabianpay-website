<?php

namespace App\Filament\Resources\SupportContacts\Pages;

use App\Filament\Resources\SupportContacts\SupportContactResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSupportContact extends EditRecord
{
    protected static string $resource = SupportContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
