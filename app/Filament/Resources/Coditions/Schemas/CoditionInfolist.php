<?php

namespace App\Filament\Resources\Coditions\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CoditionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title_ar')
                    ->placeholder('-'),
                TextEntry::make('title_en')
                    ->placeholder('-'),
                TextEntry::make('text_ar')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('text_en')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->placeholder('-')
                    ->columnSpanFull(),
            ]);
    }
}
