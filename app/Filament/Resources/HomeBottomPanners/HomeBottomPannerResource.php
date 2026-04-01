<?php

namespace App\Filament\Resources\HomeBottomPanners;

use App\Filament\Resources\HomeBottomPanners\Pages\CreateHomeBottomPanner;
use App\Filament\Resources\HomeBottomPanners\Pages\EditHomeBottomPanner;
use App\Filament\Resources\HomeBottomPanners\Pages\ListHomeBottomPanners;
use App\Filament\Resources\HomeBottomPanners\Pages\ViewHomeBottomPanner;
use App\Filament\Resources\HomeBottomPanners\Schemas\HomeBottomPannerForm;
use App\Filament\Resources\HomeBottomPanners\Schemas\HomeBottomPannerInfolist;
use App\Filament\Resources\HomeBottomPanners\Tables\HomeBottomPannersTable;
use App\Models\HomeBottomPanner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class HomeBottomPannerResource extends Resource
{
    protected static ?string $model = HomeBottomPanner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'الصفحات الرئيسية';


    public static function form(Schema $schema): Schema
    {
        return HomeBottomPannerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return HomeBottomPannerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomeBottomPannersTable::configure($table);
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
            'index' => ListHomeBottomPanners::route('/'),
            'create' => CreateHomeBottomPanner::route('/create'),
            'view' => ViewHomeBottomPanner::route('/{record}'),
            'edit' => EditHomeBottomPanner::route('/{record}/edit'),
        ];
    }
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'بانر سفلي');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'بانر سفلي');
    }
}
