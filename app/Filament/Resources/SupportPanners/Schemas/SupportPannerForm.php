<?php

namespace App\Filament\Resources\SupportPanners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SupportPannerForm
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
                    ->label('الوصف (عربي)')
                    ->default(null)
                    ->rows(3),
                Textarea::make('des_en')
                    ->label('الوصف (إنجليزي)')
                    ->default(null)
                    ->rows(3),
                TextInput::make('btn_ar')
                    ->label('نص الزر (عربي)')
                    ->default(null),
                TextInput::make('btn_en')
                    ->label('نص الزر (إنجليزي)')
                    ->default(null),
                FileUpload::make('image_ar')
                    ->label('صورة الخلفية (عربي)')
                    ->image()
                    ->directory('support')
                    ->visibility('public'),
                FileUpload::make('image_en')
                    ->label('صورة الخلفية (إنجليزي)')
                    ->image()
                    ->directory('support')
                    ->visibility('public'),
                Textarea::make('jsoning')
                    ->label('البطاقات (JSON)')
                    ->helperText('مثال: [{"title_ar": "دعم فوري", "title_en": "Instant Support", "des_ar": "...", "des_en": "...", "icon": "..."}, ...]')
                    ->default(null)
                    ->rows(5)
                    ->columnSpanFull(),
            ]);
    }
}
