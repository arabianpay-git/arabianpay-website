<?php

namespace App\Filament\Resources\HomeBottomPanners\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HomeBottomPannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title_ar')
                    ->label('العنوان بالعربية')
                    ->default(null),
                TextInput::make('title_en')
                    ->label('العنوان بالإنجليزية')
                    ->default(null),
                TextInput::make('des_ar')
                    ->label('الوصف بالعربية')
                    ->default(null),
                TextInput::make('des_en')
                    ->label('الوصف بالإنجليزية')
                    ->default(null),
                TextInput::make('iphone_ar')
                    ->label('رابط آيفون بالعربية')
                    ->default(null),
                TextInput::make('iphone_en')
                    ->label('رابط آيفون بالإنجليزية')
                    ->default(null),
                TextInput::make('and_ar')
                    ->label('رابط أندرويد بالعربية')
                    ->default(null),
                TextInput::make('and_en')
                    ->label('رابط أندرويد بالإنجليزية')
                    ->default(null),
            ]);
    }
}
