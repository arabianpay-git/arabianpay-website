<?php

namespace App\Filament\Resources\MerchantstepsPanners\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Repeater;

class MerchantstepsPannerForm
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
                TextInput::make('btng')->label('الزر (جوجل)')
                    ->default(null),
                TextInput::make('btna')->label('الزر (ابل)'),
                TextInput::make('btnd_ar')->label('الزر (عربي)')
                    ->default(null),
                TextInput::make('btnd_en')->label('الزر (انجليزي)')
                    ->default(null),

                TextInput::make('number')->label('رقم')
                    ->default(null),
                TextInput::make('sup_ar')->label('عنوان فرعي (عربي)')
                    ->default(null),
                TextInput::make('sup_en')->label('عنوان فرعي (انجليزي)')
                    ->default(null),
                TextInput::make('subdes_ar')->label('وصف فرعي (عربي)')
                    ->default(null),
                TextInput::make('subdes_en')->label('وصف فرعي (انجليزي)')
                    ->default(null),

                Repeater::make('jsoning')
                    ->label('عناصر القائمة')
                    ->addActionLabel('إضافة عنصر جديد')
                    ->default([])
                    ->schema([
                        TextInput::make('number')->label('رقم')
                        ->default(null),

                        TextInput::make('title_ar')
                            ->label('العنوان (عربي)')
                            ->placeholder('عنوان العنصر بالعربية')
                            ->required(),

                        TextInput::make('title_en')
                            ->label('العنوان (إنجليزي)')
                            ->placeholder('Item title in English')
                            ->required(),
                        TextInput::make('des_ar')
                            ->label('وصف (عربي)')
                            ->placeholder('عنوان وصف بالعربية')
                            ->required(),
                        TextInput::make('des_en')
                            ->label('وصف (إنجليزي)')
                            ->placeholder('Item title in English')
                            ->required(),
                    ])
                    ->orderable()
                    ->collapsed()
                    ->columnSpan('full'),
            ]);
    }
}
