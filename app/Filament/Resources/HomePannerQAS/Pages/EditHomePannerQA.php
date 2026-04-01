<?php

namespace App\Filament\Resources\HomePannerQAS\Pages;

use App\Filament\Resources\HomePannerQAS\HomePannerQAResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditHomePannerQA extends EditRecord
{
    protected static string $resource = HomePannerQAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            // DeleteAction::make(),
        ];
    }
}
