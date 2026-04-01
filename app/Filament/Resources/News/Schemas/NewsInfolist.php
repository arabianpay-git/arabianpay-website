<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class NewsInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title_ar')
                    ->label('العنوان (عربي)')
                    ->placeholder('-'),
                TextEntry::make('title_en')
                    ->label('العنوان (إنجليزي)')
                    ->placeholder('-'),
                TextEntry::make('description_ar')
                    ->label('الوصف المختصر (عربي)')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('description_en')
                    ->label('الوصف المختصر (إنجليزي)')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('content_ar')
                    ->label('المحتوى (عربي)')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('content_en')
                    ->label('المحتوى (إنجليزي)')
                    ->placeholder('-')
                    ->columnSpanFull(),
                ImageEntry::make('image')
                    ->label('صورة الخبر')
                    ->placeholder('-'),
                TextEntry::make('author_ar')
                    ->label('الكاتب (عربي)')
                    ->placeholder('-'),
                TextEntry::make('author_en')
                    ->label('الكاتب (إنجليزي)')
                    ->placeholder('-'),
                TextEntry::make('published_at')
                    ->label('تاريخ النشر')
                    ->date()
                    ->placeholder('-'),
                IconEntry::make('is_published')
                    ->label('منشور')
                    ->boolean(),
                TextEntry::make('views')
                    ->label('عدد المشاهدات')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->label('تاريخ الإنشاء')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('تاريخ التحديث')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
