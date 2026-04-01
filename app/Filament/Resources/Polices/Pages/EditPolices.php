<?php

namespace App\Filament\Resources\Polices\Pages;

use App\Filament\Resources\Polices\PolicesResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPolices extends EditRecord
{
    protected static string $resource = PolicesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
