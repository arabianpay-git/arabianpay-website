<?php

namespace App\Filament\Resources\JobsPanners\Pages;

use App\Filament\Resources\JobsPanners\JobsPannerResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditJobsPanner extends EditRecord
{
    protected static string $resource = JobsPannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
