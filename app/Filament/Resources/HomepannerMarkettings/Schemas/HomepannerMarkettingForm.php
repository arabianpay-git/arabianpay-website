<?php

namespace App\Filament\Resources\HomepannerMarkettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HomepannerMarkettingForm
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

                FileUpload::make('image')
                    ->label('الصورة')
                    ->image()
                    ->directory('homepanner-markettings')
                    ->preserveFilenames()
                    ->maxSize(2048) // 2 MB
                    ->nullable(),

                Repeater::make('list')
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
