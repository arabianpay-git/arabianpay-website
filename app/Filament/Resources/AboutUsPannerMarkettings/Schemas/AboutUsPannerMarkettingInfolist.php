<?php

namespace App\Filament\Resources\AboutUsPannerMarkettings\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AboutUsPannerMarkettingInfolist
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
                TextEntry::make('btn_ar')
                    ->placeholder('-'),
                TextEntry::make('btn_en')
                    ->placeholder('-'),
                ImageEntry::make('image_ar')
                    ->placeholder('-'),
                ImageEntry::make('image_en')
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
