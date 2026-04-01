<?php

namespace App\Filament\Resources\FeturesPanners\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Table;

class FeturesPannersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_ar')
                    ->label('العنوان بالعربية')
                    ->searchable(),

                TextColumn::make('sup_ar')
                    ->label('العنوان الفرعي بالعربية')
                    ->searchable(),

                TextColumn::make('sup_en')
                    ->label('العنوان الفرعي بالإنجليزية')
                    ->searchable(),

                TextColumn::make('jsoning')
                    ->label('عدد العناصر')
                    ->getStateUsing(fn ($record) => count($record->jsoning ?? []))
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('تاريخ الإنشاء')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('تاريخ التحديث')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make()->label('عرض'),
                EditAction::make()->label('تعديل'),
            ]);
    }
}
