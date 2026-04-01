<?php

namespace App\Filament\Resources\HeroHomeMains\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class HeroHomeMainInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('image')->label('الصورة الرئيسية')->placeholder('-'),
                ImageEntry::make('imageletf')->label('الصورة اليسرى')->placeholder('-'),
                ImageEntry::make('imageright')->label('الصورة اليمنى')->placeholder('-'),
                ImageEntry::make('imagemiddle')->label('الصورة الوسطى')->placeholder('-'),

                TextEntry::make('title_ar')->label('العنوان بالعربية')->placeholder('-'),
                TextEntry::make('title_en')->label('العنوان بالإنجليزية')->placeholder('-'),
                TextEntry::make('titleline_ar')->label('سطر العنوان بالعربية')->placeholder('-'),
                TextEntry::make('titleline_en')->label('سطر العنوان بالإنجليزية')->placeholder('-'),

                TextEntry::make('des_ar')->label('الوصف بالعربية')->placeholder('-'),
                TextEntry::make('des_en')->label('الوصف بالإنجليزية')->placeholder('-'),

                TextEntry::make('number')->label('الرقم')->placeholder('-'),

                TextEntry::make('created_at')->label('تاريخ الإنشاء')->dateTime()->placeholder('-'),
                TextEntry::make('updated_at')->label('تاريخ التحديث')->dateTime()->placeholder('-'),
            ]);
    }
}
