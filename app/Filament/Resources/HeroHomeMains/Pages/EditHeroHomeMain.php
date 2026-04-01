<?php

namespace App\Filament\Resources\HeroHomeMains\Pages;

use App\Filament\Resources\HeroHomeMains\HeroHomeMainResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditHeroHomeMain extends EditRecord
{
    protected static string $resource = HeroHomeMainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            // DeleteAction::make(),
        ];
    }
}
