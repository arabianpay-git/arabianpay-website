<?php

namespace App\Http\Controllers\Cms\About;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Cms\Concerns\StoresPublicUploads;
use App\Models\AboutUsEvaluation;
use App\Models\AboutUsPannerMarketting;
use App\Models\AboutUsTestMintional;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutContentController extends Controller
{
    use StoresPublicUploads;

    public function editBanner(): View
    {
        return view('cms.about.banner', ['block' => AboutUsPannerMarketting::query()->firstOrFail()]);
    }

    public function updateBanner(Request $request): RedirectResponse
    {
        $block = AboutUsPannerMarketting::query()->firstOrFail();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'des_ar' => ['nullable', 'string'],
            'des_en' => ['nullable', 'string'],
            'btn_ar' => ['nullable', 'string', 'max:255'],
            'btn_en' => ['nullable', 'string', 'max:255'],
            'image_ar' => ['nullable', 'image', 'max:5120'],
            'image_en' => ['nullable', 'image', 'max:5120'],
        ]);
        $data['image_ar'] = $this->storeUploadedFile($request, 'image_ar', $block->image_ar, 'about-us');
        $data['image_en'] = $this->storeUploadedFile($request, 'image_en', $block->image_en, 'about-us');
        $block->update($data);

        return redirect()->route('cp.about.banner')->with('success', __('تم الحفظ.'));
    }

    public function editVision(): View
    {
        $block = AboutUsTestMintional::query()->firstOrFail();

        return view('cms.about.vision', [
            'block' => $block,
            'jsoning' => json_encode($block->jsoning ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function updateVision(Request $request): RedirectResponse
    {
        $block = AboutUsTestMintional::query()->firstOrFail();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'des_ar' => ['nullable', 'string'],
            'des_en' => ['nullable', 'string'],
            'jsoning_raw' => ['required', 'string'],
        ]);
        $decoded = json_decode($data['jsoning_raw'], true);
        if (json_last_error() !== JSON_ERROR_NONE || ! is_array($decoded)) {
            return back()->withErrors(['jsoning_raw' => __('JSON غير صالح')])->withInput();
        }
        $block->update([
            'title_ar' => $data['title_ar'],
            'title_en' => $data['title_en'],
            'des_ar' => $data['des_ar'],
            'des_en' => $data['des_en'],
            'jsoning' => $decoded,
        ]);

        return redirect()->route('cp.about.vision')->with('success', __('تم الحفظ.'));
    }

    public function editValues(): View
    {
        $block = AboutUsEvaluation::query()->firstOrFail();

        return view('cms.about.values', [
            'block' => $block,
            'jsoning' => json_encode($block->jsoning ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function updateValues(Request $request): RedirectResponse
    {
        $block = AboutUsEvaluation::query()->firstOrFail();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'des_ar' => ['nullable', 'string', 'max:255'],
            'des_en' => ['nullable', 'string', 'max:255'],
            'jsoning_raw' => ['required', 'string'],
        ]);
        $decoded = json_decode($data['jsoning_raw'], true);
        if (json_last_error() !== JSON_ERROR_NONE || ! is_array($decoded)) {
            return back()->withErrors(['jsoning_raw' => __('JSON غير صالح')])->withInput();
        }
        $block->update([
            'title_ar' => $data['title_ar'],
            'title_en' => $data['title_en'],
            'des_ar' => $data['des_ar'],
            'des_en' => $data['des_en'],
            'jsoning' => $decoded,
        ]);

        return redirect()->route('cp.about.values')->with('success', __('تم الحفظ.'));
    }
}
