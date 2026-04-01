<?php

namespace App\Filament\Resources\SupportUs\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SupportUsForm
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
                Textarea::make('jsoning')
                    ->label('الفئات (JSON)')
                    ->helperText('مثال: [{"title_ar": "الأسئلة الشائعة", "title_en": "FAQ", "des_ar": "...", "des_en": "...", "icon": "...", "link": "#faq"}, ...]')
                    ->default(null)
                    ->rows(5)
                    ->columnSpanFull(),
            ]);
    }
}
