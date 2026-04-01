<?php

namespace App\Filament\Widgets;

use App\Models\SupportContact;
use App\Models\SupportCategory;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SupportStatsWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalContacts = SupportContact::count();
        $totalCategories = SupportCategory::count();

        return [
            Stat::make('طلبات الدعم', $totalContacts)
                ->description('جميع طلبات الدعم')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color('primary'),
            Stat::make('فئات الدعم', $totalCategories)
                ->description('عدد الفئات')
                ->descriptionIcon('heroicon-m-folder')
                ->color('info'),
        ];
    }
}
