<?php

namespace App\Filament\Resources\AboutUsTestMintionals\Pages;

use App\Filament\Resources\AboutUsTestMintionals\AboutUsTestMintionalResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutUsTestMintional extends EditRecord
{
    protected static string $resource = AboutUsTestMintionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
