<?php

namespace App\Filament\Resources\AbutUsBottomPanners;

use App\Filament\Resources\AbutUsBottomPanners\Pages\CreateAbutUsBottomPanner;
use App\Filament\Resources\AbutUsBottomPanners\Pages\EditAbutUsBottomPanner;
use App\Filament\Resources\AbutUsBottomPanners\Pages\ListAbutUsBottomPanners;
use App\Filament\Resources\AbutUsBottomPanners\Pages\ViewAbutUsBottomPanner;
use App\Filament\Resources\AbutUsBottomPanners\Schemas\AbutUsBottomPannerForm;
use App\Filament\Resources\AbutUsBottomPanners\Schemas\AbutUsBottomPannerInfolist;
use App\Filament\Resources\AbutUsBottomPanners\Tables\AbutUsBottomPannersTable;
use App\Models\AbutUsBottomPanner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AbutUsBottomPannerResource extends Resource
{
    protected static ?string $model = AbutUsBottomPanner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'صفحات ارابيان باي';
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
        return AbutUsBottomPannerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AbutUsBottomPannerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AbutUsBottomPannersTable::configure($table);
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
            'index' => ListAbutUsBottomPanners::route('/'),
            'create' => CreateAbutUsBottomPanner::route('/create'),
            'view' => ViewAbutUsBottomPanner::route('/{record}'),
            'edit' => EditAbutUsBottomPanner::route('/{record}/edit'),
        ];
    }
}
