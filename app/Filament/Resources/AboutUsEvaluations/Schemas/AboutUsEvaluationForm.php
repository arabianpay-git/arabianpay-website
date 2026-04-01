<?php

namespace App\Filament\Resources\AboutUsEvaluations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AboutUsEvaluationForm
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
                Textarea::make('jsoning')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
