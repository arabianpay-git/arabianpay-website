<?php

namespace App\Filament\Resources\FeturesPanners\Pages;

use App\Filament\Resources\FeturesPanners\FeturesPannerResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditFeturesPanner extends EditRecord
{
    protected static string $resource = FeturesPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
        ];
    }
}
