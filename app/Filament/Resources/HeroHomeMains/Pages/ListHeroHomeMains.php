<?php

namespace App\Filament\Resources\HeroHomeMains\Pages;

use App\Filament\Resources\HeroHomeMains\HeroHomeMainResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHeroHomeMains extends ListRecords
{
    protected static string $resource = HeroHomeMainResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         CreateAction::make(),
    //     ];
    // }
    
}
