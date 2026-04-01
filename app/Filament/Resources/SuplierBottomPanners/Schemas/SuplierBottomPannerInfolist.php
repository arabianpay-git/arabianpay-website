<?php

namespace App\Filament\Resources\SuplierBottomPanners\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SuplierBottomPannerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title_ar')
                    ->label('العنوان بالعربية')
                    ->placeholder('-'),
                TextEntry::make('title_en')
                    ->label('العنوان بالعربية')
                    ->placeholder('-'),
                TextEntry::make('des_ar')
                    ->label('الوصف بالعربية')
                    ->placeholder('-'),

                TextEntry::make('des_en')
                    ->label('Description in English')
                    ->placeholder('-'),
                TextEntry::make('jsoning')
                    ->label('تفاصيل إضافية')
                    ->getStateUsing(function ($record) {
                        // Assuming $record->jsoning is an array
                        if (is_array($record->jsoning)) {
                            return collect($record->jsoning)
                                ->map(fn ($item) => $item['title_ar'] ?? $item['title_en'] ?? '')
                                ->join(', ');
                        }
                        return $record->jsoning; // fallback if already string
                    })
                    ->columnSpanFull(),
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
