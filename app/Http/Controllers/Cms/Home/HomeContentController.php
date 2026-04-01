<?php

namespace App\Http\Controllers\Cms\Home;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Cms\Concerns\StoresPublicUploads;
use App\Models\Customer;
use App\Models\FeturesPanner;
use App\Models\HeroHomeMain;
use App\Models\HomeBottomPanner;
use App\Models\HomepannerMarketting;
use App\Models\HomePannerPartner;
use App\Models\HomePannerQA;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeContentController extends Controller
{
    use StoresPublicUploads;

    public function editHero(): View
    {
        return view('cms.home.hero', ['hero' => HeroHomeMain::query()->firstOrFail()]);
    }

    public function updateHero(Request $request): RedirectResponse
    {
        $hero = HeroHomeMain::query()->firstOrFail();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'titleline_ar' => ['nullable', 'string', 'max:255'],
            'titleline_en' => ['nullable', 'string', 'max:255'],
            'des_ar' => ['nullable', 'string'],
            'des_en' => ['nullable', 'string'],
            'number' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:5120'],
            'imageletf' => ['nullable', 'image', 'max:5120'],
            'imageright' => ['nullable', 'image', 'max:5120'],
            'imagemiddle' => ['nullable', 'image', 'max:5120'],
        ]);
        $data['image'] = $this->storeUploadedFile($request, 'image', $hero->image, 'hero_main');
        $data['imageletf'] = $this->storeUploadedFile($request, 'imageletf', $hero->imageletf, 'hero_main');
        $data['imageright'] = $this->storeUploadedFile($request, 'imageright', $hero->imageright, 'hero_main');
        $data['imagemiddle'] = $this->storeUploadedFile($request, 'imagemiddle', $hero->imagemiddle, 'hero_main');
        $hero->update($data);

        return redirect()->route('cp.home.hero')->with('success', __('تم الحفظ.'));
    }

    public function editFeatures(): View
    {
        $block = FeturesPanner::query()->firstOrFail();

        return view('cms.home.features', [
            'block' => $block,
            'jsoning' => json_encode($block->jsoning ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function updateFeatures(Request $request): RedirectResponse
    {
        $block = FeturesPanner::query()->firstOrFail();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'sup_ar' => ['nullable', 'string', 'max:255'],
            'sup_en' => ['nullable', 'string', 'max:255'],
            'jsoning_raw' => ['required', 'string'],
        ]);
        $decoded = json_decode($data['jsoning_raw'], true);
        if (json_last_error() !== JSON_ERROR_NONE || ! is_array($decoded)) {
            return back()->withErrors(['jsoning_raw' => __('JSON غير صالح')])->withInput();
        }
        $block->update([
            'title_ar' => $data['title_ar'],
            'title_en' => $data['title_en'],
            'sup_ar' => $data['sup_ar'],
            'sup_en' => $data['sup_en'],
            'jsoning' => $decoded,
        ]);

        return redirect()->route('cp.home.features')->with('success', __('تم الحفظ.'));
    }

    public function editMarketing(): View
    {
        $block = HomepannerMarketting::query()->firstOrFail();

        return view('cms.home.marketing', [
            'block' => $block,
            'listJson' => json_encode($block->list ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function updateMarketing(Request $request): RedirectResponse
    {
        $block = HomepannerMarketting::query()->firstOrFail();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'des_ar' => ['nullable', 'string'],
            'des_en' => ['nullable', 'string'],
            'list_json' => ['required', 'string'],
            'image' => ['nullable', 'image', 'max:5120'],
        ]);
        $decoded = json_decode($data['list_json'], true);
        if (json_last_error() !== JSON_ERROR_NONE || ! is_array($decoded)) {
            return back()->withErrors(['list_json' => __('JSON غير صالح')])->withInput();
        }
        $payload = [
            'title_ar' => $data['title_ar'],
            'title_en' => $data['title_en'],
            'des_ar' => $data['des_ar'],
            'des_en' => $data['des_en'],
            'list' => $decoded,
        ];
        $payload['image'] = $this->storeUploadedFile($request, 'image', $block->image, 'homepanner-markettings');
        $block->update($payload);

        return redirect()->route('cp.home.marketing')->with('success', __('تم الحفظ.'));
    }

    public function editPartners(): View
    {
        return view('cms.home.partners', ['block' => HomePannerPartner::query()->firstOrFail()]);
    }

    public function updatePartners(Request $request): RedirectResponse
    {
        $block = HomePannerPartner::query()->firstOrFail();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'link_ar' => ['nullable', 'string', 'max:500'],
            'link_en' => ['nullable', 'string', 'max:500'],
            'images_json' => ['required', 'string'],
        ]);
        $decoded = json_decode($data['images_json'], true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return back()->withErrors(['images_json' => __('JSON غير صالح')])->withInput();
        }
        $block->update([
            'title_ar' => $data['title_ar'],
            'title_en' => $data['title_en'],
            'link_ar' => $data['link_ar'],
            'link_en' => $data['link_en'],
            'image' => $decoded,
        ]);

        return redirect()->route('cp.home.partners')->with('success', __('تم الحفظ.'));
    }

    public function editQa(): View
    {
        $block = HomePannerQA::query()->firstOrFail();

        return view('cms.home.qa', [
            'block' => $block,
            'jsoning' => json_encode($block->jsoning ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function updateQa(Request $request): RedirectResponse
    {
        $block = HomePannerQA::query()->firstOrFail();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'jsoning_raw' => ['required', 'string'],
        ]);
        $decoded = json_decode($data['jsoning_raw'], true);
        if (json_last_error() !== JSON_ERROR_NONE || ! is_array($decoded)) {
            return back()->withErrors(['jsoning_raw' => __('JSON غير صالح')])->withInput();
        }
        $block->update([
            'title_ar' => $data['title_ar'],
            'title_en' => $data['title_en'],
            'jsoning' => $decoded,
        ]);

        return redirect()->route('cp.home.qa')->with('success', __('تم الحفظ.'));
    }

    public function editBottom(): View
    {
        return view('cms.home.bottom', ['block' => HomeBottomPanner::query()->firstOrFail()]);
    }

    public function updateBottom(Request $request): RedirectResponse
    {
        $block = HomeBottomPanner::query()->firstOrFail();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'des_ar' => ['nullable', 'string'],
            'des_en' => ['nullable', 'string'],
            'iphone_ar' => ['nullable', 'string', 'max:500'],
            'iphone_en' => ['nullable', 'string', 'max:500'],
            'and_ar' => ['nullable', 'string', 'max:500'],
            'and_en' => ['nullable', 'string', 'max:500'],
        ]);
        $block->update($data);

        return redirect()->route('cp.home.bottom')->with('success', __('تم الحفظ.'));
    }
}
