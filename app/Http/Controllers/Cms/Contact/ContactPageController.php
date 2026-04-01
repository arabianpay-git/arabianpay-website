<?php

namespace App\Http\Controllers\Cms\Contact;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Cms\Concerns\StoresPublicUploads;
use App\Models\ContactPanner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactPageController extends Controller
{
    use StoresPublicUploads;

    protected function panner(): ContactPanner
    {
        $panner = ContactPanner::query()->first();
        if (! $panner) {
            $panner = ContactPanner::create([
                'title_ar' => null,
                'title_en' => null,
                'hero_image' => null,
                'jsoning' => [],
            ]);
        }

        return $panner;
    }

    public function edit(): View
    {
        $block = $this->panner();

        return view('cms.contact.page', [
            'block' => $block,
            'jsoning' => json_encode($block->jsoning ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $block = $this->panner();
        $data = $request->validate([
            'title_ar' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'hero_image' => ['nullable', 'image', 'max:5120'],
            'remove_hero_image' => ['nullable', 'boolean'],
            'jsoning_raw' => ['required', 'string'],
        ]);
        $decoded = json_decode($data['jsoning_raw'], true);
        if (json_last_error() !== JSON_ERROR_NONE || ! is_array($decoded)) {
            return back()->withErrors(['jsoning_raw' => __('JSON غير صالح')])->withInput();
        }

        $heroImage = $block->hero_image;
        if ($request->boolean('remove_hero_image')) {
            $heroImage = null;
        } else {
            $heroImage = $this->storeUploadedFile($request, 'hero_image', $block->hero_image, 'contact');
        }

        $block->update([
            'title_ar' => $data['title_ar'],
            'title_en' => $data['title_en'],
            'hero_image' => $heroImage,
            'jsoning' => $decoded,
        ]);

        return redirect()->route('cp.contact-page.edit')->with('success', __('تم الحفظ.'));
    }
}
