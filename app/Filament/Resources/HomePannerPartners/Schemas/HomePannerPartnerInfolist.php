<?php

namespace App\Filament\Resources\HomePannerPartners\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class HomePannerPartnerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title_ar')
                    ->label('العنوان بالعربية')
                    ->placeholder('-'),
                TextEntry::make('title_en')
                    ->label('العنوان بالإنجليزية')
                    ->placeholder('-'),
                TextEntry::make('link_ar')
                    ->label('الرابط بالعربية')
                    ->placeholder('-'),
                TextEntry::make('link_en')
                    ->label('الرابط بالإنجليزية')
                    ->placeholder('-'),
                ImageEntry::make('image')
                    ->label('الصورة')
                    ->placeholder('-')
                    ->getStateUsing(function ($record) {
                        $images = $record->image; // already an array

                        if (is_array($images) && count($images) > 0) {
                            // Return the 'file' of the first image
                            return $images[0]['file'] ?? null;
                        }

                        return null;
                    }),
                TextEntry::make('created_at')
                    ->label('تاريخ الإنشاء')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('تاريخ التحديث')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
