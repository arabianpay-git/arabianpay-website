<?php

namespace App\Http\Controllers\Cms\Support;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Cms\Concerns\StoresPublicUploads;
use App\Models\SupportCategory;
use App\Models\SupportContact;
use App\Models\SupportPanner;
use App\Models\SupportUs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SupportCmsController extends Controller
{
    use StoresPublicUploads;

    private function supportPanner(): SupportPanner
    {
        return SupportPanner::query()->first()
            ?? SupportPanner::query()->create(['jsoning' => []]);
    }

    private function supportUs(): SupportUs
    {
        return SupportUs::query()->first()
            ?? SupportUs::query()->create(['jsoning' => []]);
    }

    private function supportContact(): SupportContact
    {
        return SupportContact::query()->first()
            ?? SupportContact::query()->create(['jsoning' => []]);
    }

    public function editHero(): View
    {
        $block = $this->supportPanner();

        return view('cms.support.hero', [
            'block' => $block,
            'jsoning' => json_encode($block->jsoning ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function updateHero(Request $request): RedirectResponse
    {
        $block = $this->supportPanner();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'des_ar' => ['nullable', 'string'],
            'des_en' => ['nullable', 'string'],
            'btn_ar' => ['nullable', 'string', 'max:255'],
            'btn_en' => ['nullable', 'string', 'max:255'],
            'jsoning_raw' => ['required', 'string'],
            'image_ar' => ['nullable', 'image', 'max:5120'],
            'image_en' => ['nullable', 'image', 'max:5120'],
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
        $payload['image_ar'] = $this->storeUploadedFile($request, 'image_ar', $block->image_ar, 'support');
        $payload['image_en'] = $this->storeUploadedFile($request, 'image_en', $block->image_en, 'support');
        $block->update($payload);

        return redirect()->route('cp.support.hero')->with('success', __('تم الحفظ.'));
    }

    public function editContent(): View
    {
        $block = $this->supportUs();

        return view('cms.support.content', [
            'block' => $block,
            'jsoning' => json_encode($block->jsoning ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function updateContent(Request $request): RedirectResponse
    {
        $block = $this->supportUs();
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

        return redirect()->route('cp.support.content')->with('success', __('تم الحفظ.'));
    }

    public function categoriesIndex(): View
    {
        return view('cms.support.categories.index', [
            'categories' => SupportCategory::query()->orderBy('id')->paginate(30),
        ]);
    }

    public function categoriesCreate(): View
    {
        return view('cms.support.categories.form', ['category' => new SupportCategory]);
    }

    public function categoriesStore(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name_ar' => ['required', 'string', 'max:255'],
            'name_en' => ['required', 'string', 'max:255'],
        ]);
        SupportCategory::query()->create($data);

        return redirect()->route('cp.support.categories.index')->with('success', __('تم الإضافة.'));
    }

    public function categoriesEdit(SupportCategory $category): View
    {
        return view('cms.support.categories.form', compact('category'));
    }

    public function categoriesUpdate(Request $request, SupportCategory $category): RedirectResponse
    {
        $data = $request->validate([
            'name_ar' => ['required', 'string', 'max:255'],
            'name_en' => ['required', 'string', 'max:255'],
        ]);
        $category->update($data);

        return redirect()->route('cp.support.categories.index')->with('success', __('تم التحديث.'));
    }

    public function categoriesDestroy(SupportCategory $category): RedirectResponse
    {
        $category->delete();

        return redirect()->route('cp.support.categories.index')->with('success', __('تم الحذف.'));
    }

    public function editContact(): View
    {
        $block = $this->supportContact();

        return view('cms.support.contact', [
            'block' => $block,
            'jsoning' => json_encode($block->jsoning ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function updateContact(Request $request): RedirectResponse
    {
        $block = $this->supportContact();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'des_ar' => ['nullable', 'string'],
            'des_en' => ['nullable', 'string'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'address_ar' => ['nullable', 'string'],
            'address_en' => ['nullable', 'string'],
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
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address_ar' => $data['address_ar'],
            'address_en' => $data['address_en'],
            'jsoning' => $decoded,
        ]);

        return redirect()->route('cp.support.contact')->with('success', __('تم الحفظ.'));
    }
}
