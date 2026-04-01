<?php

namespace App\Filament\Resources\Jobcategories\Pages;

use App\Filament\Resources\Jobcategories\JobcategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditJobcategory extends EditRecord
{
    protected static string $resource = JobcategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
