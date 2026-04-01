<?php

namespace App\Filament\Resources\AbutUsBottomPanners\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AbutUsBottomPannerInfolist
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
                TextEntry::make('des2_ar')
                    ->placeholder('-'),
                TextEntry::make('des2_en')
                    ->placeholder('-'),
                TextEntry::make('btn_ar')
                    ->placeholder('-'),
                TextEntry::make('btn_en')
                    ->placeholder('-'),
                TextEntry::make('btn2_ar')
                    ->placeholder('-'),
                TextEntry::make('btn2_en')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
