<?php

namespace App\Filament\Resources\JobsPanners;

use App\Filament\Resources\JobsPanners\Pages\CreateJobsPanner;
use App\Filament\Resources\JobsPanners\Pages\EditJobsPanner;
use App\Filament\Resources\JobsPanners\Pages\ListJobsPanners;
use App\Filament\Resources\JobsPanners\Pages\ViewJobsPanner;
use App\Filament\Resources\JobsPanners\Schemas\JobsPannerForm;
use App\Filament\Resources\JobsPanners\Schemas\JobsPannerInfolist;
use App\Filament\Resources\JobsPanners\Tables\JobsPannersTable;
use App\Models\JobsPanner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class JobsPannerResource extends Resource
{
    protected static ?string $model = JobsPanner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'الوظائف';

    public static function getPluralModelLabel(): string
    {
        return __('الوظائف');
    }

    public static function getModelLabel(): string
    {
        return __('الوظيفة');
    }

    public static function form(Schema $schema): Schema
    {
        return JobsPannerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return JobsPannerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JobsPannersTable::configure($table);
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
            'index' => ListJobsPanners::route('/'),
            'create' => CreateJobsPanner::route('/create'),
            'view' => ViewJobsPanner::route('/{record}'),
            'edit' => EditJobsPanner::route('/{record}/edit'),
        ];
    }
}
