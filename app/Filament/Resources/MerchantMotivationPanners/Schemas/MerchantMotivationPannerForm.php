<?php

namespace App\Filament\Resources\MerchantMotivationPanners\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Repeater;

class MerchantMotivationPannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title_ar')
                    ->label('العنوان (عربي)')
                    ->required()
                    ->placeholder('أدخل العنوان بالعربية'),

                TextInput::make('title_en')
                    ->label('العنوان (إنجليزي)')
                    ->required()
                    ->placeholder('Enter title in English'),

                Textarea::make('des_ar')
                    ->label('الوصف (عربي)')
                    ->rows(4)
                    ->placeholder('أدخل الوصف بالعربية')
                    ->nullable(),

                Textarea::make('des_en')
                    ->label('الوصف (إنجليزي)')
                    ->rows(4)
                    ->placeholder('Enter description in English')
                    ->nullable(),
                TextInput::make('btn_ar')->label('الزر (عربي)')
                    ->default(null),
                TextInput::make('btn_en')->label('الزر (عربي)'),

                Repeater::make('jsoning')
                    ->label('عناصر القائمة')
                    ->addActionLabel('إضافة عنصر جديد')
                    ->default([])
                    ->schema([
                        TextInput::make('icon')
                            ->label('الأيقونة')
                            ->placeholder('مثلاً: fa-solid fa-check أو اسم الأيقونة')
                            ->required(),

                        TextInput::make('title_ar')
                            ->label('العنوان (عربي)')
                            ->placeholder('عنوان العنصر بالعربية')
                            ->required(),

                        TextInput::make('title_en')
                            ->label('العنوان (إنجليزي)')
                            ->placeholder('Item title in English')
                            ->required(),
                    ])
                    ->orderable()
                    ->collapsed()
                    ->columnSpan('full'),
            ]);
    }
}
