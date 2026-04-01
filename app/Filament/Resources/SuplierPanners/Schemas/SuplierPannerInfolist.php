<?php

namespace App\Filament\Resources\SuplierPanners\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Schemas\RepeaterEntry;
use Filament\Schemas\Schema;

class SuplierPannerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
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
                                ->map(fn ($item) => $item['title_aar'] ?? $item['title_en'] ?? '')
                                ->join(', ');
                        }
                        return $record->jsoning; // fallback if already string
                    })
                    ->columnSpanFull(),

                ImageEntry::make('main_image')
                    ->label('الصورة الرئيسية')
                    ->placeholder('-'),

                ImageEntry::make('side_image')
                    ->label('الصورة الجانبية')
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
