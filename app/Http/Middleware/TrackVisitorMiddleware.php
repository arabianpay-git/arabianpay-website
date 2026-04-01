<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // تجنب تسجيل طلبات AJAX و API
        if ($request->ajax() || $request->expectsJson() || $request->is('admin/*') || $request->is('api/*')) {
            return $next($request);
        }

        // تسجيل الزائر
        try {
            Visitor::create([
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'url' => $request->fullUrl(),
                'referer' => $request->header('referer'),
                'country' => $this->getCountryFromIP($request->ip()),
                'city' => $this->getCityFromIP($request->ip()),
                'visited_at' => now(),
            ]);
        } catch (\Exception $e) {
            // في حالة وجود خطأ، لا نوقف الطلب
            \Log::error('Error tracking visitor: ' . $e->getMessage());
        }

        return $next($request);
    }

    /**
     * الحصول على الدولة من IP (يمكن استخدام خدمة خارجية)
     */
    private function getCountryFromIP(string $ip): ?string
    {
        // يمكن استخدام خدمة مثل ipapi.co أو ip-api.com
        // هنا سنستخدم طريقة بسيطة
        try {
            $response = @file_get_contents("http://ip-api.com/json/{$ip}?fields=country,city");
            if ($response) {
                $data = json_decode($response, true);
                return $data['country'] ?? null;
            }
        } catch (\Exception $e) {
            // في حالة الفشل، نرجع null
        }
        return null;
    }

    /**
     * الحصول على المدينة من IP
     */
    private function getCityFromIP(string $ip): ?string
    {
        try {
            $response = @file_get_contents("http://ip-api.com/json/{$ip}?fields=country,city");
            if ($response) {
                $data = json_decode($response, true);
                return $data['city'] ?? null;
            }
        } catch (\Exception $e) {
            // في حالة الفشل، نرجع null
        }
        return null;
    }
}
