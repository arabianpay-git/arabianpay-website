<?php

namespace App\Filament\Resources\JobsPanners\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class JobsPannersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('category.name_ar')
                    ->label('الفئة')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('name_ar')
                    ->label('اسم الوظيفة (عربي)')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('name_en')
                    ->label('اسم الوظيفة (إنجليزي)')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('location_ar')
                    ->label('الموقع')
                    ->searchable(),
                TextColumn::make('salary_ar')
                    ->label('الراتب')
                    ->searchable(),
                TextColumn::make('type_ar')
                    ->label('النوع')
                    ->searchable(),
                TextColumn::make('experience_ar')
                    ->label('الخبرة')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
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
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
