<?php

namespace App\Filament\Resources\Merchants\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MerchantInfolist
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
                TextEntry::make('btn_ar')->label('الزر (عربي)')
                    ->placeholder('-'),
                TextEntry::make('btn_en')->label('الزر (إنجليزي)')
                    ->placeholder('-'),
                ImageEntry::make('image')->label('الصورة')
                    ->placeholder('-'),
                TextEntry::make('jsoning')
                    ->label('تفاصيل إضافية')
                    ->getStateUsing(function ($record) {
                        // Assuming $record->jsoning is an array
                        if (is_array($record->jsoning)) {
                            return collect($record->jsoning)
                                ->map(fn ($item) => $item['title_aar'] ?? $item['title_en'] ?? '')
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
