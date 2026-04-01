<?php

namespace App\Filament\Resources\Permissions\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PermissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('اسم الصلاحية')
                    ->required()
                    ->unique(ignoreRecord: true),
                Textarea::make('description')
                    ->label('الوصف')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
