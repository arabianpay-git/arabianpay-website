<?php

namespace App\Filament\Resources\HeroHomeMains\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HeroHomeMainsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Image column (shows the image)
                ImageColumn::make('image')
                    ->label(__('الصورة'))  
                    ->rounded(),

                ImageColumn::make('imageletf')
                    ->label(__('صورة اليسار'))
                    ->searchable(),

                ImageColumn::make('imageright')
                    ->label(__('صورة اليمين'))
                    ->searchable(),

                ImageColumn::make('imagemiddle')
                    ->label(__('الصورة الوسطى'))
                    ->searchable(),

                TextColumn::make('title_ar')
                    ->label(__('العنوان بالعربية'))
                    ->searchable(),

                TextColumn::make('number')
                    ->label(__('الرقم'))
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label(__('تاريخ الإنشاء'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label(__('تاريخ التحديث'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])

            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ]);
    }
}
