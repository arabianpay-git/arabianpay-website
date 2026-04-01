<?php

namespace App\Filament\Resources\SupportContacts;

use App\Filament\Resources\SupportContacts\Pages\CreateSupportContact;
use App\Filament\Resources\SupportContacts\Pages\EditSupportContact;
use App\Filament\Resources\SupportContacts\Pages\ListSupportContacts;
use App\Filament\Resources\SupportContacts\Pages\ViewSupportContact;
use App\Filament\Resources\SupportContacts\Schemas\SupportContactForm;
use App\Filament\Resources\SupportContacts\Schemas\SupportContactInfolist;
use App\Filament\Resources\SupportContacts\Tables\SupportContactsTable;
use App\Models\SupportContact;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class SupportContactResource extends Resource
{
    protected static ?string $model = SupportContact::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'صفحات الدعم';
    
    public static function getPluralModelLabel(): string
    {
        return __('صفحة التواصل');
    }

    public static function getModelLabel(): string
    {
        return __('صفحة التواصل');
    }

    public static function form(Schema $schema): Schema
    {
        return SupportContactForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SupportContactInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SupportContactsTable::configure($table);
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
            'index' => ListSupportContacts::route('/'),
            'create' => CreateSupportContact::route('/create'),
            'view' => ViewSupportContact::route('/{record}'),
            'edit' => EditSupportContact::route('/{record}/edit'),
        ];
    }
}
