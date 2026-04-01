<?php

namespace App\Providers;

use App\Models\WebsiteSocial;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('footerSocial', once(fn () => WebsiteSocial::query()->first()));
        });

        Authenticate::redirectUsing(function ($request) {
            if ($request->is('cp') || $request->is('cp/*')) {
                return route('cp.login');
            }

            return Route::has('filament.admin.auth.login')
                ? route('filament.admin.auth.login')
                : '/admin/login';
        });

        Filament::serving(function () {
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                    ->label('Shop')
                    ->icon('heroicon-s-shopping-cart'),
                NavigationGroup::make()
                    ->label('Blog')
                    ->icon('heroicon-s-pencil'),
                NavigationGroup::make()
                    ->label('Settings')
                    ->icon('heroicon-s-cog')
                    ->collapsed(),
            ]);
        });
    }
}
