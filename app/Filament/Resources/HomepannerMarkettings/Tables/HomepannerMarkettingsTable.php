<?php

namespace App\Filament\Resources\HomepannerMarkettings\Tables;

use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class HomepannerMarkettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('الصورة')
                    ->square(),

                TextColumn::make('title_ar')
                    ->label('العنوان (عربي)')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('title_en')
                    ->label('العنوان (إنجليزي)')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('list')
                    ->label('عدد العناصر')
                    ->formatStateUsing(fn ($state) => is_array($state) ? count($state) : 0)
                    ->badge()
                    ->color('info'),

                TextColumn::make('created_at')
                    ->label('تاريخ الإضافة')
                    ->dateTime('Y-m-d')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}
