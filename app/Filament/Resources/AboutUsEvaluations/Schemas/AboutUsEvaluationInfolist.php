<?php

namespace App\Filament\Resources\AboutUsEvaluations\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AboutUsEvaluationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title_ar')
                    ->placeholder('-'),
                TextEntry::make('title_en')
                    ->placeholder('-'),
                TextEntry::make('des_ar')
                    ->placeholder('-'),
                TextEntry::make('des_en')
                    ->placeholder('-'),
                TextEntry::make('jsoning')
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
