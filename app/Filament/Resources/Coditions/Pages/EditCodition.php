<?php

namespace App\Filament\Resources\Coditions\Pages;

use App\Filament\Resources\Coditions\CoditionResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCodition extends EditRecord
{
    protected static string $resource = CoditionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
