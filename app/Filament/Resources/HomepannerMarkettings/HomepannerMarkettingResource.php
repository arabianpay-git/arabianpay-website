<?php

namespace App\Filament\Resources\HomepannerMarkettings;

use App\Filament\Resources\HomepannerMarkettings\Pages\CreateHomepannerMarketting;
use App\Filament\Resources\HomepannerMarkettings\Pages\EditHomepannerMarketting;
use App\Filament\Resources\HomepannerMarkettings\Pages\ListHomepannerMarkettings;
use App\Filament\Resources\HomepannerMarkettings\Schemas\HomepannerMarkettingForm;
use App\Filament\Resources\HomepannerMarkettings\Tables\HomepannerMarkettingsTable;
use App\Models\HomepannerMarketting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class HomepannerMarkettingResource extends Resource
{
    protected static ?string $model = HomepannerMarketting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'الصفحات الرئيسية';
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'صفحة اسباب ذكية');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'صفحة اسباب ذكية');
    }

    public static function form(Schema $schema): Schema
    {
        return HomepannerMarkettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomepannerMarkettingsTable::configure($table);
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
            'index' => ListHomepannerMarkettings::route('/'),
            'create' => CreateHomepannerMarketting::route('/create'),
            'edit' => EditHomepannerMarketting::route('/{record}/edit'),
        ];
    }
}
