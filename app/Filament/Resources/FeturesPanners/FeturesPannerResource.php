<?php

namespace App\Filament\Resources\FeturesPanners;

use App\Filament\Resources\FeturesPanners\Pages\CreateFeturesPanner;
use App\Filament\Resources\FeturesPanners\Pages\EditFeturesPanner;
use App\Filament\Resources\FeturesPanners\Pages\ListFeturesPanners;
use App\Filament\Resources\FeturesPanners\Pages\ViewFeturesPanner;
use App\Filament\Resources\FeturesPanners\Schemas\FeturesPannerForm;
use App\Filament\Resources\FeturesPanners\Schemas\FeturesPannerInfolist;
use App\Filament\Resources\FeturesPanners\Tables\FeturesPannersTable;
use App\Models\FeturesPanner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class FeturesPannerResource extends Resource
{
    protected static ?string $model = FeturesPanner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'الصفحات الرئيسية';
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'صفحة لماذا ارابيان');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'صفحة لماذا ارابيان');
    }

    public static function form(Schema $schema): Schema
    {
        return FeturesPannerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FeturesPannerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FeturesPannersTable::configure($table);
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
            'index' => ListFeturesPanners::route('/'),
            'create' => CreateFeturesPanner::route('/create'),
            'view' => ViewFeturesPanner::route('/{record}'),
            'edit' => EditFeturesPanner::route('/{record}/edit'),
        ];
    }
}
