<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Codition;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TermsController extends Controller
{
    public function edit(): View
    {
        $terms = Codition::query()->orderBy('id')->firstOrFail();

        return view('cms.terms.edit', [
            'terms' => $terms,
            'jsoning_hero' => json_encode($terms->jsoning_hero ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
            'jsoning_content' => json_encode($terms->jsoning_content ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $terms = Codition::query()->orderBy('id')->firstOrFail();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:233'],
            'title_en' => ['nullable', 'string', 'max:233'],
            'text_ar' => ['nullable', 'string'],
            'text_en' => ['nullable', 'string'],
            'intro_ar' => ['nullable', 'string'],
            'intro_en' => ['nullable', 'string'],
            'jsoning_hero_raw' => ['required', 'string'],
            'jsoning_content_raw' => ['required', 'string'],
        ]);
        $hero = json_decode($data['jsoning_hero_raw'], true);
        if (json_last_error() !== JSON_ERROR_NONE || ! is_array($hero)) {
            return back()->withErrors(['jsoning_hero_raw' => __('JSON غير صالح')])->withInput();
        }
        $content = json_decode($data['jsoning_content_raw'], true);
        if (json_last_error() !== JSON_ERROR_NONE || ! is_array($content)) {
            return back()->withErrors(['jsoning_content_raw' => __('JSON غير صالح')])->withInput();
        }
        $terms->update([
            'title_ar' => $data['title_ar'],
            'title_en' => $data['title_en'],
            'text_ar' => $data['text_ar'],
            'text_en' => $data['text_en'] ?? '',
            'intro_ar' => $data['intro_ar'],
            'intro_en' => $data['intro_en'],
            'jsoning_hero' => $hero,
            'jsoning_content' => $content,
        ]);

        return redirect()->route('cp.terms.edit')->with('success', __('تم الحفظ.'));
    }
}
