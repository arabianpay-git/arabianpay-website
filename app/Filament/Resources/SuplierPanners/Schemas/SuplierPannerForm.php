<?php

namespace App\Filament\Resources\SuplierPanners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Schema;

class SuplierPannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('des_ar')
                    ->label('الوصف بالعربية')
                    ->default(null),

                TextInput::make('des_en')
                    ->label('Description in English')
                    ->default(null),
                FileUpload::make('main_image')
                ->directory('supplier')
                    ->label('الصورة الرئيسية')
                    ->image(),

                FileUpload::make('side_image')
                    ->label('الصورة الجانبية')
                    ->directory('supplier')
                    ->image(),
                Repeater::make('jsoning')
                    ->label('تفاصيل إضافية')
                    ->schema([
                        TextInput::make('title_aar')
                            ->label('العنوان بالعربية')
                            ->required(),
                        TextInput::make('title_en')
                            ->label('Title in English')
                            ->required(),
                        TextInput::make('number')
                            ->label('الرقم')
                            ->numeric()
                            ->required(),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
