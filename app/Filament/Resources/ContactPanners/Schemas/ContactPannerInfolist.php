<?php

namespace App\Filament\Resources\ContactPanners\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ContactPannerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title_ar')
                    ->placeholder('-'),
                TextEntry::make('title_en')
                    ->placeholder('-'),
                ImageEntry::make('hero_image')
                    ->label('صورة الهيدر')
                    ->disk('public')
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
