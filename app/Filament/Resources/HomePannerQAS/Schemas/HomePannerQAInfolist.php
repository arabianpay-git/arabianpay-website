<?php

namespace App\Filament\Resources\HomePannerQAS\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Schemas\Schema;

class HomePannerQAInfolist
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

                // -----------------------------
                //     Display JSON questions
                // -----------------------------
                RepeatableEntry::make('jsoning')
                    ->label('الأسئلة و الأجوبة')
                    ->schema([
                        TextEntry::make('number')
                            ->label('رقم السؤال'),

                        TextEntry::make('question_ar')
                            ->label('السؤال (عربي)')
                            ->placeholder('-'),

                        TextEntry::make('question_en')
                            ->label('السؤال (إنجليزي)')
                            ->placeholder('-'),

                        TextEntry::make('answer_ar')
                            ->label('الإجابة (عربي)')
                            ->placeholder('-')
                            ->columnSpanFull(),

                        TextEntry::make('answer_en')
                            ->label('الإجابة (إنجليزي)')
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull()
                    ->placeholder('لا توجد أسئلة'),

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
