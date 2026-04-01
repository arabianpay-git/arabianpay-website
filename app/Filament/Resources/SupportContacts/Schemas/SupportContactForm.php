<?php

namespace App\Filament\Resources\SupportContacts\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SupportContactForm
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
                TextInput::make('email')
                    ->label('البريد الإلكتروني')
                    ->email()
                    ->default(null),
                TextInput::make('phone')
                    ->label('الهاتف')
                    ->tel()
                    ->default(null),
                Textarea::make('address_ar')
                    ->label('العنوان (عربي)')
                    ->default(null)
                    ->rows(2),
                Textarea::make('address_en')
                    ->label('العنوان (إنجليزي)')
                    ->default(null)
                    ->rows(2),
                Textarea::make('jsoning')
                    ->label('معلومات التواصل (JSON)')
                    ->helperText('مثال: [{"type": "email", "title_ar": "البريد الإلكتروني", "title_en": "Email", "value": "support@arabianpay.com"}, ...]')
                    ->default(null)
                    ->rows(5)
                    ->columnSpanFull(),
            ]);
    }
}
