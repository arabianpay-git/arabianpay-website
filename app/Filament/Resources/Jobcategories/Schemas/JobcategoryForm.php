<?php

namespace App\Filament\Resources\Jobcategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JobcategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name_ar')
                    ->default(null),
                TextInput::make('name_en')
                    ->default(null),
            ]);
    }
}
