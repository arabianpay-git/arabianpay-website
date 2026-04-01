<?php

namespace App\Filament\Resources\Polices\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PolicesInfolist
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
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
