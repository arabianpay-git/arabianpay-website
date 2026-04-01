<?php

namespace App\Filament\Resources\AboutUsEvaluations;

use App\Filament\Resources\AboutUsEvaluations\Pages\CreateAboutUsEvaluation;
use App\Filament\Resources\AboutUsEvaluations\Pages\EditAboutUsEvaluation;
use App\Filament\Resources\AboutUsEvaluations\Pages\ListAboutUsEvaluations;
use App\Filament\Resources\AboutUsEvaluations\Pages\ViewAboutUsEvaluation;
use App\Filament\Resources\AboutUsEvaluations\Schemas\AboutUsEvaluationForm;
use App\Filament\Resources\AboutUsEvaluations\Schemas\AboutUsEvaluationInfolist;
use App\Filament\Resources\AboutUsEvaluations\Tables\AboutUsEvaluationsTable;
use App\Models\AboutUsEvaluation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AboutUsEvaluationResource extends Resource
{
    protected static ?string $model = AboutUsEvaluation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'صفحات ارابيان باي';
    public static function getPluralModelLabel(): string
    {
        return  __(key: 'صفحة قيمنا');
    }

    public static function getModelLabel(): string
    {
        return  __(key: 'صفحة قيمنا');
    }

    public static function form(Schema $schema): Schema
    {
        return AboutUsEvaluationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AboutUsEvaluationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutUsEvaluationsTable::configure($table);
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
            'index' => ListAboutUsEvaluations::route('/'),
            'create' => CreateAboutUsEvaluation::route('/create'),
            'view' => ViewAboutUsEvaluation::route('/{record}'),
            'edit' => EditAboutUsEvaluation::route('/{record}/edit'),
        ];
    }
}
