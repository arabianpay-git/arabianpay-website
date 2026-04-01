<?php

namespace App\Filament\Resources\AboutUsTestMintionals;

use App\Filament\Resources\AboutUsTestMintionals\Pages\CreateAboutUsTestMintional;
use App\Filament\Resources\AboutUsTestMintionals\Pages\EditAboutUsTestMintional;
use App\Filament\Resources\AboutUsTestMintionals\Pages\ListAboutUsTestMintionals;
use App\Filament\Resources\AboutUsTestMintionals\Pages\ViewAboutUsTestMintional;
use App\Filament\Resources\AboutUsTestMintionals\Schemas\AboutUsTestMintionalForm;
use App\Filament\Resources\AboutUsTestMintionals\Schemas\AboutUsTestMintionalInfolist;
use App\Filament\Resources\AboutUsTestMintionals\Tables\AboutUsTestMintionalsTable;
use App\Models\AboutUsTestMintional;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AboutUsTestMintionalResource extends Resource
{
    protected static ?string $model = AboutUsTestMintional::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'صفحات ارابيان باي';
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'صفحة اراء العملاء');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'صفحة اراء العملاء');
    }

    public static function form(Schema $schema): Schema
    {
        return AboutUsTestMintionalForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AboutUsTestMintionalInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutUsTestMintionalsTable::configure($table);
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
            'index' => ListAboutUsTestMintionals::route('/'),
            'create' => CreateAboutUsTestMintional::route('/create'),
            'view' => ViewAboutUsTestMintional::route('/{record}'),
            'edit' => EditAboutUsTestMintional::route('/{record}/edit'),
        ];
    }
}
