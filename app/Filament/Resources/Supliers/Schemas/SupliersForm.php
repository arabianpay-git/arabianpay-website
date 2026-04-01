<?php

namespace App\Filament\Resources\Supliers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SupliersForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title_ar')
                    ->label('العنوان بالعربية')
                    ->default(null),
                TextInput::make('title_en')
                    ->label('Title in English')
                    ->default(null),
                TextInput::make('des_ar')
                    ->label('الوصف بالعربية')
                    ->default(null),
                TextInput::make('des_en')
                    ->label('Description in English')
                    ->default(null),
                TextInput::make('btn_ar')
                    ->label('زر بالعربية')
                    ->default(null),
                TextInput::make('btn_en')
                    ->label('Button in English')
                    ->default(null),
                FileUpload::make('image')
                    ->label('الصورة')
                    ->directory('home_panner_partners')
                    ->image(),
            ]);
    }
}
