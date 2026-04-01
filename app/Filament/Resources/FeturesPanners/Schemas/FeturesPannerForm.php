<?php

namespace App\Filament\Resources\FeturesPanners\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Schema;

class FeturesPannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title_ar')
                    ->label('العنوان بالعربية')
                    ->required()
                    ->default(null),

                TextInput::make('title_en')
                    ->label('العنوان بالإنجليزية')
                    ->required()
                    ->default(null),

                TextInput::make('sup_ar')
                    ->label('العنوان الفرعي بالعربية')
                    ->default(null),

                TextInput::make('sup_en')
                    ->label('العنوان الفرعي بالإنجليزية')
                    ->default(null),

                Repeater::make('jsoning')
                    ->label('المحتوى')
                    ->schema([
                        FileUpload::make('image')
                            ->label('الصورة')
                            ->directory('feature')
                            ->image()
                            ->required(),

                        TextInput::make('title_ar')
                            ->label('العنوان بالعربية')
                            ->required(),

                        TextInput::make('title_en')
                            ->label('العنوان بالإنجليزية')
                            ->required(),

                        TextInput::make('des_ar')
                            ->label('الوصف بالعربية')
                            ->required(),

                        TextInput::make('des_en')
                            ->label('الوصف بالإنجليزية')
                            ->required(),
                    ])
                    ->columns(1)
                    ->default([]),
            ]);
    }
}
