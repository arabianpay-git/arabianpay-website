<?php

namespace App\Filament\Resources\SupportCategories\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SupportCategoryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name_ar')->label('العنوان بالعربية')
                    ->placeholder('-'),
                TextEntry::make('name_en')->label('العنوان بالعربية')
                    ->placeholder('-'),
                TextEntry::make('created_at')->label('العنوان بالعربية')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')->label('العنوان بالانجليزي')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
