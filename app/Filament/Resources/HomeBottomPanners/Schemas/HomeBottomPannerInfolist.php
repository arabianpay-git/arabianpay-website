<?php

namespace App\Filament\Resources\HomeBottomPanners\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class HomeBottomPannerInfolist
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
                TextEntry::make('des_ar')
                    ->label('الوصف بالعربية')
                    ->placeholder('-'),
                TextEntry::make('des_en')
                    ->label('الوصف بالإنجليزية')
                    ->placeholder('-'),
                TextEntry::make('iphone_ar')
                    ->label('رابط آيفون بالعربية')
                    ->placeholder('-'),
                TextEntry::make('iphone_en')
                    ->label('رابط آيفون بالإنجليزية')
                    ->placeholder('-'),
                TextEntry::make('and_ar')
                    ->label('رابط أندرويد بالعربية')
                    ->placeholder('-'),
                TextEntry::make('and_en')
                    ->label('رابط أندرويد بالإنجليزية')
                    ->placeholder('-'),
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
