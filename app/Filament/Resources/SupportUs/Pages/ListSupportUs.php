<?php

namespace App\Filament\Resources\SupportUs\Pages;

use App\Filament\Resources\SupportUs\SupportUsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSupportUs extends ListRecords
{
    protected static string $resource = SupportUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
