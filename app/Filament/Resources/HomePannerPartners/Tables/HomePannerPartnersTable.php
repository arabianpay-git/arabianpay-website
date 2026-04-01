<?php

namespace App\Filament\Resources\HomePannerPartners\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HomePannerPartnersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_ar')
                ->label('العنوان (عربي)')
                    ->searchable(),
                TextColumn::make('link_ar')
                ->label('العنوان (انجليزي)')
                    ->searchable(),
                    TextColumn::make('image')
                    ->label('الصورة')
                    ->placeholder('-')
                    ->getStateUsing(function ($record) {
                        $images = $record->image; // already an array
    
                        if (is_array($images) && count($images) > 0) {
                            // Return the 'file' of the first image
                            return $images[0]['file'] ?? null;
                        }
    
                        return null;
                    })
                    ->color('info'),                
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
