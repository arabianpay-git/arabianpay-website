<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [
            App\Http\Middleware\LocalizationMiddleware::class,
            \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class,
            \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class,
            \Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class,
            \Mcamara\LaravelLocalization\Middleware\LocaleCookieRedirect::class,
        ]
    ],
    function () {
        // Route::get('{lang}', [LanguageController::class, 'setLocale'])->name('setLocale');
        Route::group(
            ['namespace' => ''],
            function () {

            Route::get('/', function () {
                return view('welcome');
            });
            
            
            Route::get('/merchant', function () {
                return view('layouts.merchant');
            });
            
            Route::get('/supplier', function () {
                return view('layouts.supplier');
            });
            
            Route::get('/about', function () {
                return view('layouts.about');
            })->name('about');

            Route::get('/contact', function () {
                return view('layouts.contact');
            })->name('contact');

            Route::get('/support', function () {
                return view('layouts.support');
            })->name('support');

            Route::get('/terms', function () {
                return view('layouts.terms');
            })->name('terms');

            Route::get('/policies', function () {
                return view('layouts.policies');
            })->name('policies');

            Route::get('/jobs', function () {
                return view('layouts.jobs');
            })->name('jobs');

            Route::get('/jobs/{id}', function ($id) {
                return view('layouts.job-detail', compact('id'));
            })->name('jobs.detail');

            Route::get('/news', function () {
                return view('layouts.news');
            })->name('news');

            Route::get('/news/{id}', function ($id) {
                return view('layouts.news-detail', compact('id'));
            })->name('news.detail');
            
            
           // Route::get('/', HeroHomeDisplay::class);
            // Route::get('/contact-us', CurrencyCalculator::class)->name('contact-us');
           // Route::get('/contact-us', Contactuss::class)->name('contact-us');
            // Route::get('/blog', BlogsComponent::class)->name('blog');
           // Route::get('/blog/{id}', ShowBlogComponent::class)->name('blog');
           // Route::get('/services', ShowFeatureDeatails::class)->name('services');
            
            // Route::get('/customer', ShowCutome::class)->name('customer');
           // Route::get('/about', Aboutus::class)->name('about');
            // Route::get('/destination/{destination}', ShowTripsDestination::class)->name('destination.trips');
           // Route::get('/destination/{destinationId}/trips', ShowTripsDestination::class)->name('show-trips-destination');
           // Route::get('/trips/{id}', TravelDetials::class)->name('show-trips-detials');


        }
        );
    }
);
Route::middleware([
    'prefix' => LaravelLocalization::setLocale('ar'),
])->group(function () { });