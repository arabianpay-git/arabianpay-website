<?php

namespace App\Filament\Resources\Jobcategories;

use App\Filament\Resources\Jobcategories\Pages\CreateJobcategory;
use App\Filament\Resources\Jobcategories\Pages\EditJobcategory;
use App\Filament\Resources\Jobcategories\Pages\ListJobcategories;
use App\Filament\Resources\Jobcategories\Pages\ViewJobcategory;
use App\Filament\Resources\Jobcategories\Schemas\JobcategoryForm;
use App\Filament\Resources\Jobcategories\Schemas\JobcategoryInfolist;
use App\Filament\Resources\Jobcategories\Tables\JobcategoriesTable;
use App\Models\Jobcategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class JobcategoryResource extends Resource
{
    protected static ?string $model = Jobcategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'الوظائف';
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'الاقسام');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'الاقسام');
    }

    public static function form(Schema $schema): Schema
    {
        return JobcategoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return JobcategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JobcategoriesTable::configure($table);
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
            'index' => ListJobcategories::route('/'),
            'create' => CreateJobcategory::route('/create'),
            'view' => ViewJobcategory::route('/{record}'),
            'edit' => EditJobcategory::route('/{record}/edit'),
        ];
    }
}
