<?php

namespace App\Filament\Resources\HomePannerQAS\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class HomePannerQASTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_ar')
                    ->label('العنوان (عربي)')
                    ->searchable(),

                TextColumn::make('jsoning')
                    ->label('الأسئلة')
                    ->formatStateUsing(function ($state) {
                        if (is_array($state)) {
                            $count = count($state);
                            $firstQuestion = $state[0]['question_ar'] ?? $state[0]['question_en'] ?? null;

                            $countLabel = $count . ' ' . ($count === 1 ? 'سؤال' : 'أسئلة');

                            if ($firstQuestion) {
                                return $countLabel . ' — ' . Str::limit($firstQuestion, 70);
                            }

                            return $countLabel;
                        }

                        return '-';
                    })
                    ->toggleable(isToggledHiddenByDefault: true),

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
