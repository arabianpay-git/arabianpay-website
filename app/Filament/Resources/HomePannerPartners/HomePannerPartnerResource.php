<?php

namespace App\Filament\Resources\HomePannerPartners;

use App\Filament\Resources\HomePannerPartners\Pages\CreateHomePannerPartner;
use App\Filament\Resources\HomePannerPartners\Pages\EditHomePannerPartner;
use App\Filament\Resources\HomePannerPartners\Pages\ListHomePannerPartners;
use App\Filament\Resources\HomePannerPartners\Pages\ViewHomePannerPartner;
use App\Filament\Resources\HomePannerPartners\Schemas\HomePannerPartnerForm;
use App\Filament\Resources\HomePannerPartners\Schemas\HomePannerPartnerInfolist;
use App\Filament\Resources\HomePannerPartners\Tables\HomePannerPartnersTable;
use App\Models\HomePannerPartner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class HomePannerPartnerResource extends Resource
{
    protected static ?string $model = HomePannerPartner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'الصفحات الرئيسية';
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'صفحة شركات الموردين');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'صفحة شركات الموردين');
    }

    public static function form(Schema $schema): Schema
    {
        return HomePannerPartnerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return HomePannerPartnerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomePannerPartnersTable::configure($table);
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
            'index' => ListHomePannerPartners::route('/'),
            'create' => CreateHomePannerPartner::route('/create'),
            'view' => ViewHomePannerPartner::route('/{record}'),
            'edit' => EditHomePannerPartner::route('/{record}/edit'),
        ];
    }
}
