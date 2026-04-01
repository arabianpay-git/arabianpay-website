<?php

namespace App\Filament\Resources\AbutUsBottomPanners\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AbutUsBottomPannersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_ar')
                    ->searchable(),
                TextColumn::make('title_en')
                    ->searchable(),
                TextColumn::make('des_ar')
                    ->searchable(),
                TextColumn::make('des_en')
                    ->searchable(),
                TextColumn::make('des2_ar')
                    ->searchable(),
                TextColumn::make('des2_en')
                    ->searchable(),
                TextColumn::make('btn_ar')
                    ->searchable(),
                TextColumn::make('btn_en')
                    ->searchable(),
                TextColumn::make('btn2_ar')
                    ->searchable(),
                TextColumn::make('btn2_en')
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
