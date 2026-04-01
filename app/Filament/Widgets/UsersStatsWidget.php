<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UsersStatsWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalUsers = User::count();
        $activeUsers = User::where('status', 'active')->count();
        $inactiveUsers = User::where('status', '!=', 'active')->count();

        return [
            Stat::make('إجمالي المستخدمين', $totalUsers)
                ->description('جميع المستخدمين')
                ->descriptionIcon('heroicon-m-users')
                ->color('primary'),
            Stat::make('المستخدمين النشطين', $activeUsers)
                ->description('حالة نشطة')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),
            Stat::make('المستخدمين غير النشطين', $inactiveUsers)
                ->description('حالة غير نشطة')
                ->descriptionIcon('heroicon-m-x-circle')
                ->color('danger'),
        ];
    }
}
