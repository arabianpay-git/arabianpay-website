<?php

namespace App\Filament\Resources\SuplierBottomPanners\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Schema;
use Filament\Forms\Components\ColorPicker;

class SuplierBottomPannerForm
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

                    Repeater::make('jsoning')
                    ->label('عناصر القائمة')
                    ->addActionLabel('إضافة عنصر جديد')
                    ->default([])
                    ->schema([
                
                        FileUpload::make('image')
                            ->label('الصورة')
                            ->image()
                            ->directory('supplier')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/svg+xml'])
                            ->required(),
                
                        TextInput::make('title_ar')
                            ->label('العنوان (عربي)')
                            ->placeholder('عنوان العنصر بالعربية')
                            ->required(),
                
                        TextInput::make('title_en')
                            ->label('العنوان (إنجليزي)')
                            ->placeholder('Item title in English')
                            ->required(),
                
                        // New fields added below
                        ColorPicker::make('bg_color')
                            ->label('لون الخلفية')
                            ->placeholder('#ffffff')
                            ->required(),
                
                        TextInput::make('des_ar')
                            ->label('الوصف (عربي)')
                            ->placeholder('وصف العنصر بالعربية'),
                
                        TextInput::make('des_en')
                            ->label('الوصف (إنجليزي)')
                            ->placeholder('Item description in English'),
                
                        TextInput::make('topbtn_ar')
                            ->label('زر أعلى (عربي)')
                            ->placeholder('نص الزر بالعربية'),
                
                        TextInput::make('topbtn_en')
                            ->label('زر أعلى (إنجليزي)')
                            ->placeholder('Top button text in English'),
                
                        TextInput::make('bootombtn_ar')
                            ->label('زر أسفل (عربي)')
                            ->placeholder('نص الزر بالعربية'),
                
                        TextInput::make('bootombtn_en')
                            ->label('زر أسفل (إنجليزي)')
                            ->placeholder('Bottom button text in English'),
                
                    ])
                    ->orderable()
                    ->collapsed()
                    ->columnSpan('full'),
                
            ]);
    }
}
