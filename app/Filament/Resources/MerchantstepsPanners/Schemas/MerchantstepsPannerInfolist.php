<?php

namespace App\Filament\Resources\MerchantstepsPanners\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MerchantstepsPannerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title_ar')
                    ->label('العنوان (عربي)')
                    ->placeholder('-'),

                TextEntry::make('title_en')
                    ->label('العنوان (إنجليزي)')
                    ->placeholder('-'),

                TextEntry::make('des_ar')
                    ->label('الوصف (عربي)')
                    ->placeholder('-'),

                TextEntry::make('des_en')
                    ->label('الوصف (إنجليزي)')
                    ->placeholder('-'),

                TextEntry::make('btna')
                    ->label('زر أعلى (عربي)')
                    ->placeholder('-'),

                TextEntry::make('btng')
                    ->label('زر أعلى (إنجليزي)')
                    ->placeholder('-'),

                TextEntry::make('number')
                    ->label('الرقم')
                    ->placeholder('-'),

                TextEntry::make('sup_ar')
                    ->label('العنوان الفرعي (عربي)')
                    ->placeholder('-'),

                TextEntry::make('sup_en')
                    ->label('العنوان الفرعي (إنجليزي)')
                    ->placeholder('-'),

                TextEntry::make('btnd_ar')
                    ->label('زر أسفل (عربي)')
                    ->placeholder('-'),

                TextEntry::make('btnd_en')
                    ->label('زر أسفل (إنجليزي)')
                    ->placeholder('-'),

                TextEntry::make('subdes_ar')
                    ->label('وصف فرعي (عربي)')
                    ->placeholder('-'),

                TextEntry::make('subdes_en')
                    ->label('وصف فرعي (إنجليزي)')
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
                    ->label('تاريخ التعديل')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
