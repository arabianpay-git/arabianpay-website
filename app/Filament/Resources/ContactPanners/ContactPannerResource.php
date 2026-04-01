<?php

namespace App\Filament\Resources\ContactPanners;

use App\Filament\Resources\ContactPanners\Pages\CreateContactPanner;
use App\Filament\Resources\ContactPanners\Pages\EditContactPanner;
use App\Filament\Resources\ContactPanners\Pages\ListContactPanners;
use App\Filament\Resources\ContactPanners\Pages\ViewContactPanner;
use App\Filament\Resources\ContactPanners\Schemas\ContactPannerForm;
use App\Filament\Resources\ContactPanners\Schemas\ContactPannerInfolist;
use App\Filament\Resources\ContactPanners\Tables\ContactPannersTable;
use App\Models\ContactPanner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ContactPannerResource extends Resource
{
    protected static ?string $model = ContactPanner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'صفحات التواصل والخصوصية';
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'معلومات التواصل');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'معلومات التواصل');
    }

    public static function form(Schema $schema): Schema
    {
        return ContactPannerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ContactPannerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactPannersTable::configure($table);
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
            'index' => ListContactPanners::route('/'),
            'create' => CreateContactPanner::route('/create'),
            'view' => ViewContactPanner::route('/{record}'),
            'edit' => EditContactPanner::route('/{record}/edit'),
        ];
    }
}
