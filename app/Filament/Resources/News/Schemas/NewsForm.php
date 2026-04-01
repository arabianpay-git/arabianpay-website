<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title_ar')
                    ->label('العنوان (عربي)')
                    ->required(),
                TextInput::make('title_en')
                    ->label('العنوان (إنجليزي)')
                    ->required(),
                Textarea::make('description_ar')
                    ->label('الوصف المختصر (عربي)')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('description_en')
                    ->label('الوصف المختصر (إنجليزي)')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('content_ar')
                    ->label('المحتوى (عربي)')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('content_en')
                    ->label('المحتوى (إنجليزي)')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('صورة الخبر')
                    ->image()
                    ->directory('news')
                    ->visibility('public'),
                TextInput::make('author_ar')
                    ->label('الكاتب (عربي)')
                    ->default(null),
                TextInput::make('author_en')
                    ->label('الكاتب (إنجليزي)')
                    ->default(null),
                DatePicker::make('published_at')
                    ->label('تاريخ النشر')
                    ->default(now()),
                Toggle::make('is_published')
                    ->label('منشور')
                    ->default(true)
                    ->required(),
                TextInput::make('views')
                    ->label('عدد المشاهدات')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
