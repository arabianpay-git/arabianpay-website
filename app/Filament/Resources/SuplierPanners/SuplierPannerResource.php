<?php

namespace App\Filament\Resources\SuplierPanners;

use App\Filament\Resources\SuplierPanners\Pages\CreateSuplierPanner;
use App\Filament\Resources\SuplierPanners\Pages\EditSuplierPanner;
use App\Filament\Resources\SuplierPanners\Pages\ListSuplierPanners;
use App\Filament\Resources\SuplierPanners\Pages\ViewSuplierPanner;
use App\Filament\Resources\SuplierPanners\Schemas\SuplierPannerForm;
use App\Filament\Resources\SuplierPanners\Schemas\SuplierPannerInfolist;
use App\Filament\Resources\SuplierPanners\Tables\SuplierPannersTable;
use App\Models\SuplierPanner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class SuplierPannerResource extends Resource
{
    protected static ?string $model = SuplierPanner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'صفحات المورد';
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'بانر علوي');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'بانر علوي');
    }

    public static function form(Schema $schema): Schema
    {
        return SuplierPannerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SuplierPannerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SuplierPannersTable::configure($table);
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
            'index' => ListSuplierPanners::route('/'),
            'create' => CreateSuplierPanner::route('/create'),
            'view' => ViewSuplierPanner::route('/{record}'),
            'edit' => EditSuplierPanner::route('/{record}/edit'),
        ];
    }
}
