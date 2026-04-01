<?php

namespace App\Filament\Resources\SuplierBottomPanners;

use App\Filament\Resources\SuplierBottomPanners\Pages\CreateSuplierBottomPanner;
use App\Filament\Resources\SuplierBottomPanners\Pages\EditSuplierBottomPanner;
use App\Filament\Resources\SuplierBottomPanners\Pages\ListSuplierBottomPanners;
use App\Filament\Resources\SuplierBottomPanners\Pages\ViewSuplierBottomPanner;
use App\Filament\Resources\SuplierBottomPanners\Schemas\SuplierBottomPannerForm;
use App\Filament\Resources\SuplierBottomPanners\Schemas\SuplierBottomPannerInfolist;
use App\Filament\Resources\SuplierBottomPanners\Tables\SuplierBottomPannersTable;
use App\Models\SuplierBottomPanner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class SuplierBottomPannerResource extends Resource
{
    protected static ?string $model = SuplierBottomPanner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'صفحات المورد';
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'بانر سفلي');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'بانر سفلي');
    }

    public static function form(Schema $schema): Schema
    {
        return SuplierBottomPannerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SuplierBottomPannerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SuplierBottomPannersTable::configure($table);
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
            'index' => ListSuplierBottomPanners::route('/'),
            'create' => CreateSuplierBottomPanner::route('/create'),
            'view' => ViewSuplierBottomPanner::route('/{record}'),
            'edit' => EditSuplierBottomPanner::route('/{record}/edit'),
        ];
    }
}
