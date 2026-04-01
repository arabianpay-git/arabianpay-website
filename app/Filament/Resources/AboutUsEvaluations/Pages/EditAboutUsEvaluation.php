<?php

namespace App\Filament\Resources\AboutUsEvaluations\Pages;

use App\Filament\Resources\AboutUsEvaluations\AboutUsEvaluationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutUsEvaluation extends EditRecord
{
    protected static string $resource = AboutUsEvaluationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
