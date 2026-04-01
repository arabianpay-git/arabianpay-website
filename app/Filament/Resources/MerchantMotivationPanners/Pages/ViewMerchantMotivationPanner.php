<?php

namespace App\Filament\Resources\MerchantMotivationPanners\Pages;

use App\Filament\Resources\MerchantMotivationPanners\MerchantMotivationPannerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMerchantMotivationPanner extends ViewRecord
{
    protected static string $resource = MerchantMotivationPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
