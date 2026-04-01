<?php

namespace App\Filament\Resources\JobsPanners\Schemas;

use App\Models\Jobcategory;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class JobsPannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('jobcategory')
                    ->label('الفئة')
                    ->relationship('category', 'name_ar')
                    ->getOptionLabelFromRecordUsing(fn (Jobcategory $record): string => $record->name_ar . ' / ' . $record->name_en)
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('name_ar')
                    ->label('اسم الوظيفة (عربي)')
                    ->required()
                    ->maxLength(255),
                TextInput::make('name_en')
                    ->label('اسم الوظيفة (إنجليزي)')
                    ->required()
                    ->maxLength(255),

                TextInput::make('location_ar')
                    ->label('الموقع (عربي)')
                    ->maxLength(255),
                TextInput::make('location_en')
                    ->label('الموقع (إنجليزي)')
                    ->maxLength(255),

                Textarea::make('description_ar')
                    ->label('وصف الوظيفة (عربي)')
                    ->rows(6)
                    ->columnSpanFull(),
                Textarea::make('description_en')
                    ->label('وصف الوظيفة (إنجليزي)')
                    ->rows(6)
                    ->columnSpanFull(),

                Textarea::make('requirements_ar')
                    ->label('المتطلبات (عربي)')
                    ->rows(6)
                    ->columnSpanFull(),
                Textarea::make('requirements_en')
                    ->label('المتطلبات (إنجليزي)')
                    ->rows(6)
                    ->columnSpanFull(),

                TextInput::make('salary_ar')
                    ->label('الراتب (عربي)')
                    ->maxLength(255)
                    ->placeholder('مثال: 15,000 - 25,000 ريال'),
                TextInput::make('salary_en')
                    ->label('الراتب (إنجليزي)')
                    ->maxLength(255)
                    ->placeholder('Example: 15,000 - 25,000 SAR'),

                TextInput::make('type_ar')
                    ->label('نوع الوظيفة (عربي)')
                    ->maxLength(255)
                    ->placeholder('مثال: دوام كامل'),
                TextInput::make('type_en')
                    ->label('نوع الوظيفة (إنجليزي)')
                    ->maxLength(255)
                    ->placeholder('Example: Full Time'),

                TextInput::make('experience_ar')
                    ->label('الخبرة المطلوبة (عربي)')
                    ->maxLength(255)
                    ->placeholder('مثال: 3+ سنوات'),
                TextInput::make('experience_en')
                    ->label('الخبرة المطلوبة (إنجليزي)')
                    ->maxLength(255)
                    ->placeholder('Example: 3+ Years'),
            ]);
    }
}
