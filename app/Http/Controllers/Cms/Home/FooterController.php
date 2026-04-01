<?php

namespace App\Http\Controllers\Cms\Home;

use App\Http\Controllers\Controller;
use App\Models\WebsiteSocial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FooterController extends Controller
{
    public function edit(): View
    {
        $row = WebsiteSocial::query()->first();
        if (! $row) {
            $row = WebsiteSocial::query()->create([]);
        }

        return view('cms.home.footer', compact('row'));
    }

    public function update(Request $request): RedirectResponse
    {
        $row = WebsiteSocial::query()->first() ?? WebsiteSocial::query()->create([]);
        $data = $request->validate([
            'phonea1' => ['nullable', 'string', 'max:255'],
            'phonea2' => ['nullable', 'string', 'max:255'],
            'phonesana' => ['nullable', 'string', 'max:255'],
            'phonewhats' => ['nullable', 'string', 'max:255'],
            'wechatlink' => ['nullable', 'string', 'max:500'],
            'whatslink' => ['nullable', 'string', 'max:500'],
            'facelink' => ['nullable', 'string', 'max:500'],
            'twitterlink' => ['nullable', 'string', 'max:500'],
            'instegramlink' => ['nullable', 'string', 'max:500'],
            'mail' => ['nullable', 'email', 'max:255'],
            'app_store_url' => ['nullable', 'string', 'max:500'],
            'google_play_url' => ['nullable', 'string', 'max:500'],
        ]);
        $row->update($data);

        return redirect()->route('cp.home.footer')->with('success', __('تم حفظ بيانات التواصل (للفوتر عند ربطها بالقالب).'));
    }
}
