<?php

namespace App\Filament\Resources\Jobcategories\Pages;

use App\Filament\Resources\Jobcategories\JobcategoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewJobcategory extends ViewRecord
{
    protected static string $resource = JobcategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
