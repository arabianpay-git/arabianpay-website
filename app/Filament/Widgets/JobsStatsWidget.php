<?php

namespace App\Filament\Widgets;

use App\Models\JobsPanner;
use App\Models\Jobcategory;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class JobsStatsWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalJobs = JobsPanner::count();
        $totalCategories = Jobcategory::count();

        return [
            Stat::make('إجمالي الوظائف', $totalJobs)
                ->description('جميع الوظائف المتاحة')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('primary'),
            Stat::make('فئات الوظائف', $totalCategories)
                ->description('عدد الفئات')
                ->descriptionIcon('heroicon-m-folder')
                ->color('info'),
        ];
    }
}
