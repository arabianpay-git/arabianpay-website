<?php

namespace App\Filament\Resources\Supliers\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SupliersInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->components([
            TextEntry::make('title_ar')
                ->label('العنوان بالعربية')
                ->placeholder('-'),
            TextEntry::make('title_en')
                ->label('Title in English')
                ->placeholder('-'),
            TextEntry::make('des_ar')
                ->label('الوصف بالعربية')
                ->placeholder('-'),
            TextEntry::make('des_en')
                ->label('Description in English')
                ->placeholder('-'),
            TextEntry::make('btn_ar')
                ->label('زر بالعربية')
                ->placeholder('-'),
            TextEntry::make('btn_en')
                ->label('Button in English')
                ->placeholder('-'),
            ImageEntry::make('image')
                ->label('الصورة')
                ->placeholder('-'),
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
