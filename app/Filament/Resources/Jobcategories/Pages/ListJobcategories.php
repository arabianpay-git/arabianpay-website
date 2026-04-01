<?php

namespace App\Filament\Resources\Jobcategories\Pages;

use App\Filament\Resources\Jobcategories\JobcategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJobcategories extends ListRecords
{
    protected static string $resource = JobcategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
