<?php

namespace App\Filament\Resources\Polices\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PolicesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title_ar')
                    ->label('العنوان (عربي)')
                    ->default(null),
                TextInput::make('title_en')
                    ->label('العنوان (إنجليزي)')
                    ->default(null),
                Textarea::make('intro_ar')
                    ->label('المقدمة الأولى (عربي)')
                    ->default(null)
                    ->rows(3)
                    ->columnSpanFull(),
                Textarea::make('intro_en')
                    ->label('المقدمة الأولى (إنجليزي)')
                    ->default(null)
                    ->rows(3)
                    ->columnSpanFull(),
                Textarea::make('text_ar')
                    ->label('المقدمة الثانية (عربي)')
                    ->default(null)
                    ->rows(3)
                    ->columnSpanFull(),
                Textarea::make('text_en')
                    ->label('المقدمة الثانية (إنجليزي)')
                    ->default(null)
                    ->rows(3)
                    ->columnSpanFull(),
                
                Repeater::make('jsoning_hero')
                    ->label('بطاقات Hero')
                    ->addActionLabel('إضافة بطاقة جديدة')
                    ->collapsible()
                    ->default([])
                    ->schema([
                        TextInput::make('title_ar')
                            ->label('العنوان (عربي)')
                            ->required(),
                        TextInput::make('title_en')
                            ->label('العنوان (إنجليزي)')
                            ->required(),
                        Textarea::make('des_ar')
                            ->label('الوصف (عربي)')
                            ->rows(2)
                            ->required(),
                        Textarea::make('des_en')
                            ->label('الوصف (إنجليزي)')
                            ->rows(2)
                            ->required(),
                        Textarea::make('icon')
                            ->label('الأيقونة (SVG)')
                            ->rows(3)
                            ->helperText('أدخل كود SVG للأيقونة')
                            ->default(null),
                    ])
                    ->orderable()
                    ->columnSpanFull(),

                Repeater::make('jsoning_content')
                    ->label('أقسام المحتوى')
                    ->addActionLabel('إضافة قسم جديد')
                    ->collapsible()
                    ->default([])
                    ->schema([
                        TextInput::make('title_ar')
                            ->label('عنوان القسم (عربي)')
                            ->required(),
                        TextInput::make('title_en')
                            ->label('عنوان القسم (إنجليزي)')
                            ->required(),
                        Textarea::make('content_ar')
                            ->label('محتوى القسم (عربي)')
                            ->rows(4)
                            ->required(),
                        Textarea::make('content_en')
                            ->label('محتوى القسم (إنجليزي)')
                            ->rows(4)
                            ->required(),
                        Repeater::make('items')
                            ->label('قائمة العناصر (اختياري)')
                            ->addActionLabel('إضافة عنصر')
                            ->schema([
                                TextInput::make('text_ar')
                                    ->label('النص (عربي)')
                                    ->required(),
                                TextInput::make('text_en')
                                    ->label('النص (إنجليزي)')
                                    ->required(),
                            ])
                            ->collapsible()
                            ->default([]),
                    ])
                    ->orderable()
                    ->columnSpanFull(),
            ]);
    }
}
