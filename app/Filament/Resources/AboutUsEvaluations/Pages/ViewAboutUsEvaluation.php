<?php

namespace App\Filament\Resources\AboutUsEvaluations\Pages;

use App\Filament\Resources\AboutUsEvaluations\AboutUsEvaluationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAboutUsEvaluation extends ViewRecord
{
    protected static string $resource = AboutUsEvaluationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
