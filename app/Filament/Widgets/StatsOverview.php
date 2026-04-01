<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\News;
use App\Models\JobsPanner;
use App\Models\Supliers;
use App\Models\Merchant;
use App\Models\SupportContact;
use App\Models\Visitor;
use App\Models\ContactRequest;
use App\Models\Complaint;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalVisitors = Visitor::count();
        $todayVisitors = Visitor::whereDate('visited_at', today())->count();
        $totalContactRequests = ContactRequest::count();
        $pendingContactRequests = ContactRequest::where('status', 'pending')->count();
        $totalComplaints = Complaint::count();
        $pendingComplaints = Complaint::where('status', 'pending')->count();

        return [
            Stat::make('إجمالي الزوار', $totalVisitors)
                ->description('زوار اليوم: ' . $todayVisitors)
                ->descriptionIcon('heroicon-m-globe-alt')
                ->color('primary')
                ->chart([7, 3, 4, 5, 6, 3, 5]),
            Stat::make('طلبات التواصل', $totalContactRequests)
                ->description('قيد الانتظار: ' . $pendingContactRequests)
                ->descriptionIcon('heroicon-m-envelope')
                ->color('info')
                ->chart([3, 2, 4, 5, 1, 3, 4]),
            Stat::make('الشكاوى', $totalComplaints)
                ->description('قيد الانتظار: ' . $pendingComplaints)
                ->descriptionIcon('heroicon-m-exclamation-triangle')
                ->color('warning')
                ->chart([2, 3, 4, 3, 5, 4, 6]),
            Stat::make('إجمالي المستخدمين', User::count())
                ->description('عدد المستخدمين المسجلين')
                ->descriptionIcon('heroicon-m-users')
                ->color('success')
                ->chart([7, 3, 4, 5, 6, 3, 5]),
            Stat::make('الأخبار المنشورة', News::where('is_published', true)->count())
                ->description('من إجمالي ' . News::count() . ' خبر')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('success')
                ->chart([3, 2, 4, 5, 1, 3, 4]),
            Stat::make('الوظائف المتاحة', JobsPanner::count())
                ->description('عدد الوظائف المضافة')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('info')
                ->chart([2, 3, 4, 3, 5, 4, 6]),
            Stat::make('الموردين', Supliers::count())
                ->description('عدد الموردين المسجلين')
                ->descriptionIcon('heroicon-m-truck')
                ->color('warning')
                ->chart([4, 3, 5, 4, 6, 5, 7]),
            Stat::make('التجار', Merchant::count())
                ->description('عدد التجار المسجلين')
                ->descriptionIcon('heroicon-m-shopping-bag')
                ->color('danger')
                ->chart([5, 4, 6, 5, 7, 6, 8]),
            Stat::make('طلبات الدعم', SupportContact::count())
                ->description('عدد طلبات الدعم')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color('success')
                ->chart([3, 4, 5, 4, 6, 5, 7]),
        ];
    }
}
