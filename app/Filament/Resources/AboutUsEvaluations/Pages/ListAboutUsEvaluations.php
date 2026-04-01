<?php

namespace App\Filament\Resources\AboutUsEvaluations\Pages;

use App\Filament\Resources\AboutUsEvaluations\AboutUsEvaluationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutUsEvaluations extends ListRecords
{
    protected static string $resource = AboutUsEvaluationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
