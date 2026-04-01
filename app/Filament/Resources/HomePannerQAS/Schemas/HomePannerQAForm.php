<?php

namespace App\Filament\Resources\HomePannerQAS\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Schema;

class HomePannerQAForm
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

                Repeater::make('jsoning')
                    ->label('الأسئلة و الأجوبة')
                    ->addActionLabel('إضافة سؤال جديد')
                    ->collapsible()
                    ->default([])
                    ->schema([
                        TextInput::make('number')
                            ->label('رقم السؤال')
                            ->numeric()
                            ->required(),

                        TextInput::make('question_ar')
                            ->label('السؤال (عربي)')
                            ->required(),

                        TextInput::make('question_en')
                            ->label('السؤال (إنجليزي)')
                            ->required(),

                        Textarea::make('answer_ar')
                            ->label('الإجابة (عربي)')
                            ->rows(3)
                            ->required(),

                        Textarea::make('answer_en')
                            ->label('الإجابة (إنجليزي)')
                            ->rows(3)
                            ->required(),
                    ])
                    ->columnSpan('full'),
            ]);
    }
}
