<?php

namespace App\Filament\Resources\HomePannerPartners\Pages;

use App\Filament\Resources\HomePannerPartners\HomePannerPartnerResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditHomePannerPartner extends EditRecord
{
    protected static string $resource = HomePannerPartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
