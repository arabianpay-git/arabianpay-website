<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showLogin(): View|RedirectResponse
    {
        if (Auth::check() && Auth::user()->hasRole('admin') && Auth::user()->status === 'active') {
            return redirect()->route('cp.dashboard');
        }

        return view('cms.auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        if (Auth::check() && Auth::user()->hasRole('admin') && Auth::user()->status === 'active') {
            return redirect()->route('cp.dashboard');
        }

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()->withErrors(['email' => __('بيانات الدخول غير صحيحة.')])->onlyInput('email');
        }

        $request->session()->regenerate();

        if (! Auth::user()->hasRole('admin') || Auth::user()->status !== 'active') {
            Auth::logout();

            return back()->withErrors(['email' => __('ليس لديك صلاحية الدخول.')]);
        }

        return redirect()->intended(route('cp.dashboard'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('cp.login');
    }
}
