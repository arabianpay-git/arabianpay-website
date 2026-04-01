<?php

namespace App\Filament\Resources\AboutUsPannerMarkettings;

use App\Filament\Resources\AboutUsPannerMarkettings\Pages\CreateAboutUsPannerMarketting;
use App\Filament\Resources\AboutUsPannerMarkettings\Pages\EditAboutUsPannerMarketting;
use App\Filament\Resources\AboutUsPannerMarkettings\Pages\ListAboutUsPannerMarkettings;
use App\Filament\Resources\AboutUsPannerMarkettings\Pages\ViewAboutUsPannerMarketting;
use App\Filament\Resources\AboutUsPannerMarkettings\Schemas\AboutUsPannerMarkettingForm;
use App\Filament\Resources\AboutUsPannerMarkettings\Schemas\AboutUsPannerMarkettingInfolist;
use App\Filament\Resources\AboutUsPannerMarkettings\Tables\AboutUsPannerMarkettingsTable;
use App\Models\AboutUsPannerMarketting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AboutUsPannerMarkettingResource extends Resource
{
    protected static ?string $model = AboutUsPannerMarketting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'صفحات ارابيان باي';
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'صفحة تعريفية');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'صفحة تعريفية');
    }

    public static function form(Schema $schema): Schema
    {
        return AboutUsPannerMarkettingForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AboutUsPannerMarkettingInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutUsPannerMarkettingsTable::configure($table);
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
            'index' => ListAboutUsPannerMarkettings::route('/'),
            'create' => CreateAboutUsPannerMarketting::route('/create'),
            'view' => ViewAboutUsPannerMarketting::route('/{record}'),
            'edit' => EditAboutUsPannerMarketting::route('/{record}/edit'),
        ];
    }
}
