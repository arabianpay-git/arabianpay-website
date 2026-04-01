<?php

namespace App\Filament\Widgets;

use App\Models\Supliers;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SuppliersStatsWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalSuppliers = Supliers::count();

        return [
            Stat::make('إجمالي الموردين', $totalSuppliers)
                ->description('جميع الموردين المسجلين')
                ->descriptionIcon('heroicon-m-truck')
                ->color('primary'),
        ];
    }
}
