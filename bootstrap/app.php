<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
use Livewire\Mechanisms\HandleRequests\HandleRequests;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes;
use Mcamara\LaravelLocalization\Middleware\LocaleCookieRedirect;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware('web')
                ->group(base_path('routes/cms.php'));

            // Fallback if Livewire's POST route was not registered (e.g. stale route cache, provider order).
            if (Route::getRoutes()->getByName('livewire.update') === null) {
                Route::post('/livewire/update', [HandleRequests::class, 'handleUpdate'])
                    ->middleware('web')
                    ->name('livewire.update');
            }
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            LaravelLocalizationRoutes::class,
            LaravelLocalizationRedirectFilter::class,
            LocaleSessionRedirect::class,
            LocaleCookieRedirect::class,
            // LocaleViewPath::class,
        ]);
        $middleware->alias([
            'cms.admin' => \App\Http\Middleware\EnsureCmsAdmin::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
