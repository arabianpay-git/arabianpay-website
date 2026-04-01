<?php

namespace App\Filament\Resources\HeroHomeMains\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class HeroHomeMainForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->label('الصورة الرئيسية')
                    ->imageEditor()
                    ->directory('hero_main')
                    ->acceptedFileTypes(['image/*'])
                    ->image(),

                FileUpload::make('imageletf')
                    ->label('الصورة اليسرى')
                    ->imageEditor()
                    ->directory('hero_main')
                    ->acceptedFileTypes(['image/*'])
                    ->image(),

                FileUpload::make('imageright')
                    ->label('الصورة اليمنى')
                    ->imageEditor()
                    ->directory('hero_main')
                    ->acceptedFileTypes(['image/*'])
                    ->image(),

                FileUpload::make('imagemiddle')
                    ->label('الصورة الوسطى')
                    ->acceptedFileTypes(['image/*'])
                    ->image(),

                TextInput::make('title_ar')
                    ->label('العنوان بالعربية')
                    ->maxLength(255),

                TextInput::make('title_en')
                    ->label('العنوان بالإنجليزية')
                    ->maxLength(255),

                TextInput::make('titleline_ar')
                    ->label('سطر العنوان بالعربية')
                    ->maxLength(255),

                TextInput::make('titleline_en')
                    ->label('سطر العنوان بالإنجليزية')
                    ->maxLength(255),

                Textarea::make('des_ar')
                    ->label('الوصف بالعربية'),

                Textarea::make('des_en')
                    ->label('الوصف بالإنجليزية'),

                TextInput::make('number')
                    ->label('الرقم')
                    ->numeric(),
            ]);
    }
}
