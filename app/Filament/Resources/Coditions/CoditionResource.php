<?php

namespace App\Filament\Resources\Coditions;

use App\Filament\Resources\Coditions\Pages\CreateCodition;
use App\Filament\Resources\Coditions\Pages\EditCodition;
use App\Filament\Resources\Coditions\Pages\ListCoditions;
use App\Filament\Resources\Coditions\Pages\ViewCodition;
use App\Filament\Resources\Coditions\Schemas\CoditionForm;
use App\Filament\Resources\Coditions\Schemas\CoditionInfolist;
use App\Filament\Resources\Coditions\Tables\CoditionsTable;
use App\Models\Codition;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class CoditionResource extends Resource
{
    protected static ?string $model = Codition::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'صفحات ارابيان باي';

    public static function getPluralModelLabel(): string
    {
        return  __(key: 'الشروط والاحكام');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'الشروط والاحكام');
    }

    public static function form(Schema $schema): Schema
    {
        return CoditionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CoditionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CoditionsTable::configure($table);
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
            'index' => ListCoditions::route('/'),
            'create' => CreateCodition::route('/create'),
            'view' => ViewCodition::route('/{record}'),
            'edit' => EditCodition::route('/{record}/edit'),
        ];
    }
}
