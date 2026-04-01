<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
// use Filament\SpatieLaravelTranslatablePlugin;
use Filament\Navigation\MenuItem;
// use CharrafiMed\GlobalSearchModal\GlobalSearchModalPlugin;
use Filament\Navigation\NavigationGroup;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            // ->databaseNotifications()
            // ->navigationGroups([
            //     NavigationGroup::make()->label('الصفحات الرئيسية'),
            //     NavigationGroup::make()->label('صفحات المورد'),
            //     NavigationGroup::make()->label('صفحات التاجر'),
            // ])
            ->profile(isSimple: false)
            // ->registration()
            // ->passwordReset()
            ->emailVerification()
            ->profile()
            // ->plugins([
            //     GlobalSearchModalPlugin::make()
            //         ->closeButton(enabled: true)
            //         ->slideOver()
            // ])
            ->renderHook(
                'panels::head.start',
                fn() => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">'
            )
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Blue,
                'danger' => Color::Red,
                // 'gray' => Color::Slate,
                'info' => Color::Green,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])
            ->userMenuItems([
                MenuItem::make()
                    ->label('admin')
                    ->icon('heroicon-o-cog-6-tooth')
                    ->url('/admin')
            ])

            ->font('Inter')
            ->brandLogo(asset('file.png'))
            ->brandLogoHeight('4rem')
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                \App\Filament\Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
