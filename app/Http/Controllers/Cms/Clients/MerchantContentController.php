<?php

namespace App\Http\Controllers\Cms\Clients;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Cms\Concerns\StoresPublicUploads;
use App\Models\Merchant;
use App\Models\MerchantMotivationPanner;
use App\Models\MerchantstepsPanner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MerchantContentController extends Controller
{
    use StoresPublicUploads;

    /** القسم العلوي + منصة تفهمك (نفس السجل merchants) */
    public function editMerchant(): View
    {
        $hero = Merchant::query()->firstOrFail();

        return view('cms.clients.merchant', [
            'hero' => $hero,
            'jsoning' => json_encode($hero->jsoning ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function updateMerchant(Request $request): RedirectResponse
    {
        $hero = Merchant::query()->firstOrFail();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'des_ar' => ['nullable', 'string'],
            'des_en' => ['nullable', 'string'],
            'btn_ar' => ['nullable', 'string', 'max:255'],
            'btn_en' => ['nullable', 'string', 'max:255'],
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
            'btn_ar' => $data['btn_ar'],
            'btn_en' => $data['btn_en'],
            'jsoning' => $decoded,
        ];
        $payload['image'] = $this->storeUploadedFile($request, 'image', $hero->image, 'merchants');
        $hero->update($payload);

        return redirect()->route('cp.clients.merchant')->with('success', __('تم الحفظ.'));
    }

    /** اختارها ندفعها */
    public function editMotivation(): View
    {
        $block = MerchantMotivationPanner::query()->firstOrFail();

        return view('cms.clients.motivation', [
            'block' => $block,
            'jsoning' => json_encode($block->jsoning ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function updateMotivation(Request $request): RedirectResponse
    {
        $block = MerchantMotivationPanner::query()->firstOrFail();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'des_ar' => ['nullable', 'string'],
            'des_en' => ['nullable', 'string'],
            'btn_ar' => ['nullable', 'string', 'max:255'],
            'btn_en' => ['nullable', 'string', 'max:255'],
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
            'btn_ar' => $data['btn_ar'],
            'btn_en' => $data['btn_en'],
            'jsoning' => $decoded,
        ]);

        return redirect()->route('cp.clients.motivation')->with('success', __('تم الحفظ.'));
    }

    /** كيف تحصل على التمويل */
    public function editSteps(): View
    {
        $block = MerchantstepsPanner::query()->firstOrFail();

        return view('cms.clients.steps', [
            'block' => $block,
            'jsoning' => json_encode($block->jsoning ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function updateSteps(Request $request): RedirectResponse
    {
        $block = MerchantstepsPanner::query()->firstOrFail();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'des_ar' => ['nullable', 'string'],
            'des_en' => ['nullable', 'string'],
            'sup_ar' => ['nullable', 'string', 'max:255'],
            'sup_en' => ['nullable', 'string', 'max:255'],
            'number' => ['nullable', 'string', 'max:255'],
            'btna' => ['nullable', 'string', 'max:255'],
            'btng' => ['nullable', 'string', 'max:255'],
            'btnd_ar' => ['nullable', 'string', 'max:255'],
            'btnd_en' => ['nullable', 'string', 'max:255'],
            'subdes_ar' => ['nullable', 'string'],
            'subdes_en' => ['nullable', 'string'],
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
            'sup_ar' => $data['sup_ar'],
            'sup_en' => $data['sup_en'],
            'number' => $data['number'],
            'btna' => $data['btna'],
            'btng' => $data['btng'],
            'btnd_ar' => $data['btnd_ar'],
            'btnd_en' => $data['btnd_en'],
            'subdes_ar' => $data['subdes_ar'],
            'subdes_en' => $data['subdes_en'],
            'jsoning' => $decoded,
        ]);

        return redirect()->route('cp.clients.steps')->with('success', __('تم الحفظ.'));
    }
}
