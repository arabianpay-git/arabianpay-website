<?php

namespace App\Filament\Widgets;

use App\Models\Merchant;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MerchantsStatsWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalMerchants = Merchant::count();

        return [
            Stat::make('إجمالي التجار', $totalMerchants)
                ->description('جميع التجار المسجلين')
                ->descriptionIcon('heroicon-m-shopping-bag')
                ->color('primary'),
        ];
    }
}
