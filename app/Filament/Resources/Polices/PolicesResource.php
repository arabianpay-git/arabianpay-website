<?php

namespace App\Filament\Resources\Polices;

use App\Filament\Resources\Polices\Pages\CreatePolices;
use App\Filament\Resources\Polices\Pages\EditPolices;
use App\Filament\Resources\Polices\Pages\ListPolices;
use App\Filament\Resources\Polices\Pages\ViewPolices;
use App\Filament\Resources\Polices\Schemas\PolicesForm;
use App\Filament\Resources\Polices\Schemas\PolicesInfolist;
use App\Filament\Resources\Polices\Tables\PolicesTable;
use App\Models\Polices;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PolicesResource extends Resource
{
    protected static ?string $model = Polices::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'صفحات التواصل والخصوصية';
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'سياسة الخصوصية');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'سياسة الخصوصية');
    }

    public static function form(Schema $schema): Schema
    {
        return PolicesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PolicesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PolicesTable::configure($table);
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
            'index' => ListPolices::route('/'),
            'create' => CreatePolices::route('/create'),
            'view' => ViewPolices::route('/{record}'),
            'edit' => EditPolices::route('/{record}/edit'),
        ];
    }
}
