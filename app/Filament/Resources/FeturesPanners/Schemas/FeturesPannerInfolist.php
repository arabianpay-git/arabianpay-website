<?php

namespace App\Filament\Resources\FeturesPanners\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class FeturesPannerInfolist
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

                TextEntry::make('sup_ar')
                    ->label('العنوان الفرعي بالعربية')
                    ->placeholder('-'),

                TextEntry::make('sup_en')
                    ->label('العنوان الفرعي بالإنجليزية')
                    ->placeholder('-'),

                TextEntry::make('jsoning')
                    ->label('المحتوى')
                    ->getStateUsing(fn ($record) => 
                        collect($record->jsoning ?? [])
                            ->map(fn ($item) => $item['title_ar'] ?? '')
                            ->join(', ')
                    )
                    ->columnSpanFull()
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
