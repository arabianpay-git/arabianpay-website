<?php

namespace App\Filament\Resources\MerchantstepsPanners;

use App\Filament\Resources\MerchantstepsPanners\Pages\CreateMerchantstepsPanner;
use App\Filament\Resources\MerchantstepsPanners\Pages\EditMerchantstepsPanner;
use App\Filament\Resources\MerchantstepsPanners\Pages\ListMerchantstepsPanners;
use App\Filament\Resources\MerchantstepsPanners\Pages\ViewMerchantstepsPanner;
use App\Filament\Resources\MerchantstepsPanners\Schemas\MerchantstepsPannerForm;
use App\Filament\Resources\MerchantstepsPanners\Schemas\MerchantstepsPannerInfolist;
use App\Filament\Resources\MerchantstepsPanners\Tables\MerchantstepsPannersTable;
use App\Models\MerchantstepsPanner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class MerchantstepsPannerResource extends Resource
{
    protected static ?string $model = MerchantstepsPanner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'صفحات التاجر';
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'بانر خطوات المورد');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'بانر خطوات المورد');
    }


    public static function form(Schema $schema): Schema
    {
        return MerchantstepsPannerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MerchantstepsPannerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MerchantstepsPannersTable::configure($table);
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
            'index' => ListMerchantstepsPanners::route('/'),
            'create' => CreateMerchantstepsPanner::route('/create'),
            'view' => ViewMerchantstepsPanner::route('/{record}'),
            'edit' => EditMerchantstepsPanner::route('/{record}/edit'),
        ];
    }
}
