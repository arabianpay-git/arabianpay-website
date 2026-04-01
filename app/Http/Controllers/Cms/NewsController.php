<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Cms\Concerns\StoresPublicUploads;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class NewsController extends Controller
{
    use StoresPublicUploads;

    public function index(): View
    {
        return view('cms.news.index', [
            'news' => News::query()->orderByDesc('published_at')->orderByDesc('id')->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('cms.news.form', ['news' => new News]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validatedNews($request);
        $data['is_published'] = $request->boolean('is_published');
        $data['image'] = $this->storeUploadedFile($request, 'image', null, 'news');
        $data['views'] = 0;
        News::query()->create($data);

        return redirect()->route('cp.news.index')->with('success', __('تم إنشاء الخبر.'));
    }

    public function edit(News $news): View
    {
        return view('cms.news.form', compact('news'));
    }

    public function update(Request $request, News $news): RedirectResponse
    {
        $data = $this->validatedNews($request);
        $data['is_published'] = $request->boolean('is_published');
        $data['image'] = $this->storeUploadedFile($request, 'image', $news->image, 'news');
        $news->update($data);

        return redirect()->route('cp.news.index')->with('success', __('تم التحديث.'));
    }

    public function destroy(News $news): RedirectResponse
    {
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();

        return redirect()->route('cp.news.index')->with('success', __('تم الحذف.'));
    }

    private function validatedNews(Request $request): array
    {
        return $request->validate([
            'title_ar' => ['required', 'string', 'max:255'],
            'title_en' => ['required', 'string', 'max:255'],
            'description_ar' => ['nullable', 'string'],
            'description_en' => ['nullable', 'string'],
            'content_ar' => ['nullable', 'string'],
            'content_en' => ['nullable', 'string'],
            'author_ar' => ['nullable', 'string', 'max:255'],
            'author_en' => ['nullable', 'string', 'max:255'],
            'published_at' => ['nullable', 'date'],
            'image' => ['nullable', 'image', 'max:8192'],
        ]);
    }
}
