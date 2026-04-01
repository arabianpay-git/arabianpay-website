<?php

namespace App\Http\Controllers\Cms\About;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Cms\Concerns\StoresPublicUploads;
use App\Models\AboutUsMap;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutMapController extends Controller
{
    use StoresPublicUploads;

    public function edit(): View
    {
        $block = AboutUsMap::query()->firstOrFail();

        return view('cms.about.map', [
            'block' => $block,
            'jsoning' => json_encode($block->jsoning ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $block = AboutUsMap::query()->firstOrFail();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'des_ar' => ['nullable', 'string'],
            'des_en' => ['nullable', 'string'],
            'des2_ar' => ['nullable', 'string'],
            'des2_en' => ['nullable', 'string'],
            'jsoning_raw' => ['required', 'string'],
            'image' => ['nullable', 'image', 'max:5120'],
        ]);
        $decoded = json_decode($data['jsoning_raw'], true);
        if (json_last_error() !== JSON_ERROR_NONE || ! is_array($decoded)) {
            return back()->withErrors(['jsoning_raw' => __('JSON غير صالح')])->withInput();
        }
        $payload = [
            'title_ar' => $data['title_ar'],
            'title_en' => $data['title_en'],
            'des_ar' => $data['des_ar'],
            'des_en' => $data['des_en'],
            'des2_ar' => $data['des2_ar'],
            'des2_en' => $data['des2_en'],
            'jsoning' => $decoded,
        ];
        $payload['image'] = $this->storeUploadedFile($request, 'image', $block->image, 'about-us');
        $block->update($payload);

        return redirect()->route('cp.about.map')->with('success', __('تم الحفظ.'));
    }
}
