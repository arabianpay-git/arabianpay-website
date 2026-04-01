<?php

namespace App\Filament\Resources\SupportPanners;

use App\Filament\Resources\SupportPanners\Pages\CreateSupportPanner;
use App\Filament\Resources\SupportPanners\Pages\EditSupportPanner;
use App\Filament\Resources\SupportPanners\Pages\ListSupportPanners;
use App\Filament\Resources\SupportPanners\Schemas\SupportPannerForm;
use App\Filament\Resources\SupportPanners\Tables\SupportPannersTable;
use App\Models\SupportPanner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class SupportPannerResource extends Resource
{
    protected static ?string $model = SupportPanner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'صفحات الدعم';
    
    public static function getPluralModelLabel(): string
    {
        return __('صفحة Hero الدعم');
    }

    public static function getModelLabel(): string
    {
        return __('صفحة Hero الدعم');
    }

    public static function form(Schema $schema): Schema
    {
        return SupportPannerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SupportPannersTable::configure($table);
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
            'index' => ListSupportPanners::route('/'),
            'create' => CreateSupportPanner::route('/create'),
            'edit' => EditSupportPanner::route('/{record}/edit'),
        ];
    }
}
