<?php

namespace App\Filament\Resources\MerchantMotivationPanners\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MerchantMotivationPannerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title_ar')->label('العنوان (عربي)')
                    ->placeholder('-'),
                TextEntry::make('title_en')->label('العنوان (إنجليزي)')
                    ->placeholder('-'),
                TextEntry::make('des_ar')->label('الوصف (عربي)')
                    ->placeholder('-'),
                TextEntry::make('des_en')->label('الوصف (إنجليزي)')
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
                TextEntry::make('btn_ar')->label('الزر (عربي)')
                    ->placeholder('-'),
                TextEntry::make('btn_en')->label('الزر (إنجليزي)')
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('تاريخ التحديث')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
