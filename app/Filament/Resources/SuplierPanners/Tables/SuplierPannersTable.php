<?php

namespace App\Filament\Resources\SuplierPanners\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SuplierPannersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('des_ar')
                    ->label('الوصف بالعربية')
                    ->searchable(),


                ImageColumn::make('main_image')
                    ->label('الصورة الرئيسية'),

                ImageColumn::make('side_image')
                    ->label('الصورة الجانبية'),

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
                // يمكنك إضافة فلاتر هنا إذا لزم الأمر
            ])
            ->recordActions([
                ViewAction::make()
                    ->label('عرض'),

                EditAction::make()
                    ->label('تعديل'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->label('حذف محدد'),
                ]),
            ]);
    }
}
