<?php

namespace App\Filament\Resources\AbutUsBottomPanners\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AbutUsBottomPannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title_ar')
                    ->default(null),
                TextInput::make('title_en')
                    ->default(null),
                TextInput::make('des_ar')
                    ->default(null),
                TextInput::make('des_en')
                    ->default(null),
                TextInput::make('des2_ar')
                    ->default(null),
                TextInput::make('des2_en')
                    ->default(null),
                TextInput::make('btn_ar')
                    ->default(null),
                TextInput::make('btn_en')
                    ->default(null),
                TextInput::make('btn2_ar')
                    ->default(null),
                TextInput::make('btn2_en')
                    ->default(null),
            ]);
    }
}
