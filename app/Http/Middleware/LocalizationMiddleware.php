<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);

        if (in_array($locale, LaravelLocalization::getSupportedLanguagesKeys())) {
            LaravelLocalization::setLocale($locale);
            // $locale = Session::get("locale") ?? 'en';
            Session::put('locale', $locale);
            App::setLocale($locale);

        } else {
            $locale = LaravelLocalization::getCurrentLocale();
        }

        return $next($request);
    }

    // public function handle(Request $request, Closure $next): Response
    // {
    //     $locale = Session::get("locale") ?? 'ar';
    //     Session::put('locale', $locale);
    //     App::setLocale($locale);

    //     return $next($request);
    // }
}
