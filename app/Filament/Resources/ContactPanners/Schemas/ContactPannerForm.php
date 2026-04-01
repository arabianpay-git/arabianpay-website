<?php

namespace App\Filament\Resources\ContactPanners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactPannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title_ar')
                    ->default(null),
                TextInput::make('title_en')
                    ->default(null),
                FileUpload::make('hero_image')
                    ->label('صورة خلفية الهيدر')
                    ->image()
                    ->directory('contact')
                    ->visibility('public')
                    ->columnSpanFull(),
                Textarea::make('jsoning')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
