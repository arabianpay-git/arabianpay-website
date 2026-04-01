<?php

namespace App\Filament\Resources\HeroHomeMains;

use App\Filament\Resources\HeroHomeMains\Pages\CreateHeroHomeMain;
use App\Filament\Resources\HeroHomeMains\Pages\EditHeroHomeMain;
use App\Filament\Resources\HeroHomeMains\Pages\ListHeroHomeMains;
use App\Filament\Resources\HeroHomeMains\Pages\ViewHeroHomeMain;
use App\Filament\Resources\HeroHomeMains\Schemas\HeroHomeMainForm;
use App\Filament\Resources\HeroHomeMains\Schemas\HeroHomeMainInfolist;
use App\Filament\Resources\HeroHomeMains\Tables\HeroHomeMainsTable;
use App\Models\HeroHomeMain;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class HeroHomeMainResource extends Resource
{
    protected static ?string $model = HeroHomeMain::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ComputerDesktop;
   
    protected static string | UnitEnum | null $navigationGroup = 'الصفحات الرئيسية';

    public static function form(Schema $schema): Schema
    {
        return HeroHomeMainForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return HeroHomeMainInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HeroHomeMainsTable::configure($table);
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
            'index' => ListHeroHomeMains::route('/'),
            'create' => CreateHeroHomeMain::route('/create'),
            'view' => ViewHeroHomeMain::route('/{record}'),
            'edit' => EditHeroHomeMain::route('/{record}/edit'),
        ];
    }
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'الصفحة التعريفية');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'الصفحة التعريفية');
    }
}
