<?php

namespace App\Filament\Resources\Complaints\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Schema;

class ComplaintForm
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
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('complaint')
                    ->label('الشكوى')
                    ->required()
                    ->columnSpanFull()
                    ->rows(5),
                Select::make('status')
                    ->label('الحالة')
                    ->options([
                        'pending' => 'قيد الانتظار',
                        'under_review' => 'قيد المراجعة',
                        'resolved' => 'تم الحل',
                        'closed' => 'مغلق',
                    ])
                    ->default('pending')
                    ->required(),
                Textarea::make('admin_response')
                    ->label('رد الإدارة')
                    ->columnSpanFull()
                    ->rows(3),
                DatePicker::make('resolved_at')
                    ->label('تاريخ الحل')
                    ->displayFormat('Y-m-d'),
            ]);
    }
}
