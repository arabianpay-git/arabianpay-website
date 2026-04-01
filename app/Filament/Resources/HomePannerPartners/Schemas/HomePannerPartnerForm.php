<?php

namespace App\Filament\Resources\HomePannerPartners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;

class HomePannerPartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        
        return $schema
            ->components([
                Section::make('معلومات الشريك')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title_ar')
                                    ->label('العنوان بالعربية')
                                    ->required(),
    
                                TextInput::make('title_en')
                                    ->label('العنوان بالإنجليزية')
                                    ->required(),
    
                                TextInput::make('link_ar')
                                    ->label('الرابط بالعربية')
                                    ->required(),
    
                                TextInput::make('link_en')
                                    ->label('الرابط بالإنجليزية')
                                    ->required(),
                            ]),
                    ]),
    
                    Section::make('الصور')
                    ->schema([
                        Repeater::make('image')
                            ->label('الصور')
                            ->createItemButtonLabel('إضافة صورة')
                            ->schema([
                                Select::make('position')
                                    ->label('الموضع')
                                    ->options([
                                        'top' => 'أعلى',
                                        'bottom' => 'أسفل',
                                    ])
                                    ->required(),
    
                                    FileUpload::make('file')
                                    ->label('اختر الصورة')
                                    ->directory('home_panner_partners')
                                    ->preserveFilenames()
                                    ->maxSize(2048)
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/svg+xml'])
                                    ->required(),

                                TextInput::make('name_ar')
                                    ->label('العلامة التجارية (عربي)')
                                    ->maxLength(255),

                                TextInput::make('name_en')
                                    ->label('العلامة التجارية (إنجليزي)')
                                    ->maxLength(255),
                            ])
                            ->columnSpan('full'),
                    ]),
            
            ]);
    }
}
