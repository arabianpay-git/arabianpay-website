<?php

namespace App\Filament\Resources\Jobcategories\Pages;

use App\Filament\Resources\Jobcategories\JobcategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateJobcategory extends CreateRecord
{
    protected static string $resource = JobcategoryResource::class;
}
