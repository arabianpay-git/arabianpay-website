<?php

namespace App\Filament\Resources\AboutUsMaps\Schemas;

use Filament\Forms\Components\FileUpload;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

use Filament\Schemas\Schema;

class AboutUsMapForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title_ar')
                    ->label('العنوان (عربي)')
                    ->default(null),
                TextInput::make('title_en')
                    ->label('العنوان (إنجليزي)')
                    ->default(null),
                Textarea::make('des_ar')
                    ->label('الوصف الأول (عربي)')
                    ->default(null)
                    ->rows(3),
                Textarea::make('des_en')
                    ->label('الوصف الأول (إنجليزي)')
                    ->default(null)
                    ->rows(3),
                Textarea::make('des2_ar')
                    ->label('الوصف الثاني (عربي)')
                    ->default(null)
                    ->rows(3),
                Textarea::make('des2_en')
                    ->label('الوصف الثاني (إنجليزي)')
                    ->default(null)
                    ->rows(3),
                FileUpload::make('image')
                    ->label('صورة الخريطة')
                    ->image()
                    ->directory('about-us')
                    ->visibility('public'),
                Repeater::make('jsoning')
                    ->label('الإحصائيات')
                    ->addActionLabel('إضافة إحصائية جديدة')
                    ->collapsible()
                    ->default([])
                    ->schema([
                        TextInput::make('number')
                            ->label('الرقم')
                            ->required()
                            ->helperText('مثال: 1000+ أو 5000+'),
                        TextInput::make('label_ar')
                            ->label('الوصف (عربي)')
                            ->required(),
                        TextInput::make('label_en')
                            ->label('الوصف (إنجليزي)')
                            ->required(),
                    ])
                    ->orderable()
                    ->columnSpanFull(),
            ]);
    }
}
