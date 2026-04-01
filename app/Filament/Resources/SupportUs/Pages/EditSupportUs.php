<?php

namespace App\Filament\Resources\SupportUs\Pages;

use App\Filament\Resources\SupportUs\SupportUsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSupportUs extends EditRecord
{
    protected static string $resource = SupportUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
