<?php

namespace App\Http\Controllers\Cms\Partners;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Cms\Concerns\StoresPublicUploads;
use App\Models\SuplierBottomPanner;
use App\Models\SuplierPanner;
use App\Models\Supliers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SupplierContentController extends Controller
{
    use StoresPublicUploads;

    public function editHero(): View
    {
        return view('cms.partners.hero', ['hero' => Supliers::query()->firstOrFail()]);
    }

    public function updateHero(Request $request): RedirectResponse
    {
        $hero = Supliers::query()->firstOrFail();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'des_ar' => ['nullable', 'string'],
            'des_en' => ['nullable', 'string'],
            'btn_ar' => ['nullable', 'string', 'max:255'],
            'btn_en' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:5120'],
        ]);
        $data['image'] = $this->storeUploadedFile($request, 'image', $hero->image, 'supliers');
        $hero->update($data);

        return redirect()->route('cp.partners.hero')->with('success', __('تم الحفظ.'));
    }

    /** منصة تفهمك + اختارها ندفعها — نفس السجل suplier_panners */
    public function editMiddle(): View
    {
        $block = SuplierPanner::query()->firstOrFail();

        return view('cms.partners.middle', [
            'block' => $block,
            'jsoning' => json_encode($block->jsoning ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function updateMiddle(Request $request): RedirectResponse
    {
        $block = SuplierPanner::query()->firstOrFail();
        $data = $request->validate([
            'des_ar' => ['nullable', 'string'],
            'des_en' => ['nullable', 'string'],
            'jsoning_raw' => ['required', 'string'],
            'main_image' => ['nullable', 'image', 'max:5120'],
            'side_image' => ['nullable', 'image', 'max:5120'],
        ]);
        $decoded = json_decode($data['jsoning_raw'], true);
        if (json_last_error() !== JSON_ERROR_NONE || ! is_array($decoded)) {
            return back()->withErrors(['jsoning_raw' => __('JSON غير صالح')])->withInput();
        }
        $payload = [
            'des_ar' => $data['des_ar'],
            'des_en' => $data['des_en'],
            'jsoning' => $decoded,
        ];
        $payload['main_image'] = $this->storeUploadedFile($request, 'main_image', $block->main_image, 'suplier_panners');
        $payload['side_image'] = $this->storeUploadedFile($request, 'side_image', $block->side_image, 'suplier_panners');
        $block->update($payload);

        return redirect()->route('cp.partners.middle')->with('success', __('تم الحفظ.'));
    }

    public function editBottom(): View
    {
        $block = SuplierBottomPanner::query()->firstOrFail();

        return view('cms.partners.bottom', [
            'block' => $block,
            'jsoning' => json_encode($block->jsoning ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function updateBottom(Request $request): RedirectResponse
    {
        $block = SuplierBottomPanner::query()->firstOrFail();
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

        return redirect()->route('cp.partners.bottom')->with('success', __('تم الحفظ.'));
    }
}
