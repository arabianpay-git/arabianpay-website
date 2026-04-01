<?php

namespace App\Filament\Resources\SupportUs;

use App\Filament\Resources\SupportUs\Pages\CreateSupportUs;
use App\Filament\Resources\SupportUs\Pages\EditSupportUs;
use App\Filament\Resources\SupportUs\Pages\ListSupportUs;
use App\Filament\Resources\SupportUs\Schemas\SupportUsForm;
use App\Filament\Resources\SupportUs\Tables\SupportUsTable;
use App\Models\SupportUs;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class SupportUsResource extends Resource
{
    protected static ?string $model = SupportUs::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'صفحات الدعم';
    
    public static function getPluralModelLabel(): string
    {
        return __('صفحة المحتوى');
    }

    public static function getModelLabel(): string
    {
        return __('صفحة المحتوى');
    }

    public static function form(Schema $schema): Schema
    {
        return SupportUsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SupportUsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSupportUs::route('/'),
            'create' => CreateSupportUs::route('/create'),
            'edit' => EditSupportUs::route('/{record}/edit'),
        ];
    }
}
