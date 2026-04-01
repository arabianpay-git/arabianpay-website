<?php

namespace App\Filament\Resources\AboutUsMaps;

use App\Filament\Resources\AboutUsMaps\Pages\CreateAboutUsMap;
use App\Filament\Resources\AboutUsMaps\Pages\EditAboutUsMap;
use App\Filament\Resources\AboutUsMaps\Pages\ListAboutUsMaps;
use App\Filament\Resources\AboutUsMaps\Schemas\AboutUsMapForm;
use App\Filament\Resources\AboutUsMaps\Tables\AboutUsMapsTable;
use App\Models\AboutUsMap;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AboutUsMapResource extends Resource
{
    protected static ?string $model = AboutUsMap::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'صفحات ارابيان باي';
    
    public static function getPluralModelLabel(): string
    {
        return __('صفحة الخريطة');
    }

    public static function getModelLabel(): string
    {
        return __('صفحة الخريطة');
    }

    public static function form(Schema $schema): Schema
    {
        return AboutUsMapForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutUsMapsTable::configure($table);
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
            'index' => ListAboutUsMaps::route('/'),
            'create' => CreateAboutUsMap::route('/create'),
            'edit' => EditAboutUsMap::route('/{record}/edit'),
        ];
    }
}
