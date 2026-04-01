<?php

namespace App\Filament\Resources\JobsPanners\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class JobsPannerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('category.name_ar')
                    ->label('الفئة (عربي)'),
                TextEntry::make('category.name_en')
                    ->label('الفئة (إنجليزي)'),
                TextEntry::make('name_ar')
                    ->label('اسم الوظيفة (عربي)')
                    ->placeholder('-'),
                TextEntry::make('name_en')
                    ->label('اسم الوظيفة (إنجليزي)')
                    ->placeholder('-'),
                TextEntry::make('location_ar')
                    ->label('الموقع (عربي)')
                    ->placeholder('-'),
                TextEntry::make('location_en')
                    ->label('الموقع (إنجليزي)')
                    ->placeholder('-'),
                TextEntry::make('description_ar')
                    ->label('وصف الوظيفة (عربي)')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('description_en')
                    ->label('وصف الوظيفة (إنجليزي)')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('requirements_ar')
                    ->label('المتطلبات (عربي)')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('requirements_en')
                    ->label('المتطلبات (إنجليزي)')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('salary_ar')
                    ->label('الراتب (عربي)')
                    ->placeholder('-'),
                TextEntry::make('salary_en')
                    ->label('الراتب (إنجليزي)')
                    ->placeholder('-'),
                TextEntry::make('type_ar')
                    ->label('نوع الوظيفة (عربي)')
                    ->placeholder('-'),
                TextEntry::make('type_en')
                    ->label('نوع الوظيفة (إنجليزي)')
                    ->placeholder('-'),
                TextEntry::make('experience_ar')
                    ->label('الخبرة المطلوبة (عربي)')
                    ->placeholder('-'),
                TextEntry::make('experience_en')
                    ->label('الخبرة المطلوبة (إنجليزي)')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
