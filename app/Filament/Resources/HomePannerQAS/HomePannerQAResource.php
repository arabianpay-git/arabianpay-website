<?php

namespace App\Filament\Resources\HomePannerQAS;

use App\Filament\Resources\HomePannerQAS\Pages\CreateHomePannerQA;
use App\Filament\Resources\HomePannerQAS\Pages\EditHomePannerQA;
use App\Filament\Resources\HomePannerQAS\Pages\ListHomePannerQAS;
use App\Filament\Resources\HomePannerQAS\Pages\ViewHomePannerQA;
use App\Filament\Resources\HomePannerQAS\Schemas\HomePannerQAForm;
use App\Filament\Resources\HomePannerQAS\Schemas\HomePannerQAInfolist;
use App\Filament\Resources\HomePannerQAS\Tables\HomePannerQASTable;
use App\Models\HomePannerQA;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class HomePannerQAResource extends Resource
{
    protected static ?string $model = HomePannerQA::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'الصفحات الرئيسية';
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'صفحة الاسئلة');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'صفحة الاسئلة');
    }

    public static function form(Schema $schema): Schema
    {
        return HomePannerQAForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return HomePannerQAInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomePannerQASTable::configure($table);
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
            'index' => ListHomePannerQAS::route('/'),
            'create' => CreateHomePannerQA::route('/create'),
            'view' => ViewHomePannerQA::route('/{record}'),
            'edit' => EditHomePannerQA::route('/{record}/edit'),
        ];
    }
}
