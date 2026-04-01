<?php

namespace App\Filament\Resources\HeroHomeMains\Pages;

use App\Filament\Resources\HeroHomeMains\HeroHomeMainResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewHeroHomeMain extends ViewRecord
{
    protected static string $resource = HeroHomeMainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
