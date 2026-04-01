<?php

namespace App\Filament\Resources\MerchantstepsPanners\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MerchantstepsPannersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('number')
                    ->label('الرقم')
                    ->searchable(),
                TextColumn::make('title_ar')
                    ->label('العنوان (عربي)')
                    ->searchable(),

                
                TextColumn::make('btna')
                    ->label('زر (ابل)')
                    ->searchable(),

                TextColumn::make('btng')
                    ->label('زر (جوجل)')
                    ->searchable(),


                TextColumn::make('btnd_en')
                    ->label('زر تحميل (إنجليزي)')
                    ->searchable(),

                TextColumn::make('subdes_ar')
                    ->label('وصف فرعي (عربي)')
                    ->searchable(),

                TextColumn::make('subdes_en')
                    ->label('وصف فرعي (إنجليزي)')
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('تاريخ الإنشاء')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('تاريخ التعديل')
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
