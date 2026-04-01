<?php

namespace App\Filament\Resources\AboutUsPannerMarkettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AboutUsPannerMarkettingForm
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
                TextInput::make('btn_ar')
                    ->default(null),
                TextInput::make('btn_en')
                    ->default(null),
                FileUpload::make('image_ar')
                    ->image(),
                FileUpload::make('image_en')
                    ->image(),
            ]);
    }
}
