<?php

namespace App\Filament\Widgets;

use App\Models\News;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class NewsStatsWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalNews = News::count();
        $publishedNews = News::where('is_published', true)->count();
        $totalViews = News::sum('views');

        return [
            Stat::make('إجمالي الأخبار', $totalNews)
                ->description('جميع الأخبار')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('primary'),
            Stat::make('الأخبار المنشورة', $publishedNews)
                ->description('منشورة حالياً')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),
            Stat::make('إجمالي المشاهدات', number_format($totalViews))
                ->description('عدد المشاهدات')
                ->descriptionIcon('heroicon-m-eye')
                ->color('info'),
        ];
    }
}
