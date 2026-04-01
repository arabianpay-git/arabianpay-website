<?php

namespace App\Filament\Resources\ContactRequests\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class ContactRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('الاسم')
                    ->required(),
                TextInput::make('email')
                    ->label('البريد الإلكتروني')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->label('الهاتف')
                    ->tel(),
                TextInput::make('subject')
                    ->label('الموضوع')
                    ->columnSpanFull(),
                Textarea::make('message')
                    ->label('الرسالة')
                    ->required()
                    ->columnSpanFull()
                    ->rows(5),
                Select::make('status')
                    ->label('الحالة')
                    ->options([
                        'pending' => 'قيد الانتظار',
                        'read' => 'تم القراءة',
                        'replied' => 'تم الرد',
                        'closed' => 'مغلق',
                    ])
                    ->default('pending')
                    ->required(),
                Textarea::make('admin_notes')
                    ->label('ملاحظات الإدارة')
                    ->columnSpanFull()
                    ->rows(3),
            ]);
    }
}
