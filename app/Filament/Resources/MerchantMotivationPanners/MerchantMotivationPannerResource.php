<?php

namespace App\Filament\Resources\MerchantMotivationPanners;

use App\Filament\Resources\MerchantMotivationPanners\Pages\CreateMerchantMotivationPanner;
use App\Filament\Resources\MerchantMotivationPanners\Pages\EditMerchantMotivationPanner;
use App\Filament\Resources\MerchantMotivationPanners\Pages\ListMerchantMotivationPanners;
use App\Filament\Resources\MerchantMotivationPanners\Pages\ViewMerchantMotivationPanner;
use App\Filament\Resources\MerchantMotivationPanners\Schemas\MerchantMotivationPannerForm;
use App\Filament\Resources\MerchantMotivationPanners\Schemas\MerchantMotivationPannerInfolist;
use App\Filament\Resources\MerchantMotivationPanners\Tables\MerchantMotivationPannersTable;
use App\Models\MerchantMotivationPanner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class MerchantMotivationPannerResource extends Resource
{
    protected static ?string $model = MerchantMotivationPanner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'صفحات التاجر';
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'بانر ترويج');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'بانر ترويج');
    }

    public static function form(Schema $schema): Schema
    {
        return MerchantMotivationPannerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MerchantMotivationPannerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MerchantMotivationPannersTable::configure($table);
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
            'index' => ListMerchantMotivationPanners::route('/'),
            'create' => CreateMerchantMotivationPanner::route('/create'),
            'view' => ViewMerchantMotivationPanner::route('/{record}'),
            'edit' => EditMerchantMotivationPanner::route('/{record}/edit'),
        ];
    }
}
