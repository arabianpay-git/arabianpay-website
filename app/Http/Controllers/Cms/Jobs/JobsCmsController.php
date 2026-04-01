<?php

namespace App\Http\Controllers\Cms\Jobs;

use App\Http\Controllers\Controller;
use App\Models\Jobcategory;
use App\Models\JobsPanner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobsCmsController extends Controller
{
    public function heroInfo(): View
    {
        return view('cms.jobs.hero-info');
    }

    public function categoriesIndex(): View
    {
        return view('cms.jobs.categories.index', [
            'categories' => Jobcategory::query()->orderBy('id')->paginate(30),
        ]);
    }

    public function categoriesCreate(): View
    {
        return view('cms.jobs.categories.form', ['category' => new Jobcategory]);
    }

    public function categoriesStore(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name_ar' => ['required', 'string', 'max:255'],
            'name_en' => ['required', 'string', 'max:255'],
        ]);
        Jobcategory::query()->create($data);

        return redirect()->route('cp.jobs.categories.index')->with('success', __('تم الإضافة.'));
    }

    public function categoriesEdit(Jobcategory $category): View
    {
        return view('cms.jobs.categories.form', ['category' => $category]);
    }

    public function categoriesUpdate(Request $request, Jobcategory $category): RedirectResponse
    {
        $data = $request->validate([
            'name_ar' => ['required', 'string', 'max:255'],
            'name_en' => ['required', 'string', 'max:255'],
        ]);
        $category->update($data);

        return redirect()->route('cp.jobs.categories.index')->with('success', __('تم التحديث.'));
    }

    public function categoriesDestroy(Jobcategory $category): RedirectResponse
    {
        $category->delete();

        return redirect()->route('cp.jobs.categories.index')->with('success', __('تم الحذف.'));
    }

    public function positionsIndex(): View
    {
        return view('cms.jobs.positions.index', [
            'positions' => JobsPanner::query()->with('category')->orderByDesc('id')->paginate(20),
        ]);
    }

    public function positionsCreate(): View
    {
        return view('cms.jobs.positions.form', [
            'position' => new JobsPanner,
            'categories' => Jobcategory::query()->orderBy('name_ar')->get(),
        ]);
    }

    public function positionsStore(Request $request): RedirectResponse
    {
        $data = $this->validatedPosition($request);
        JobsPanner::query()->create($data);

        return redirect()->route('cp.jobs.positions.index')->with('success', __('تم الإضافة.'));
    }

    public function positionsEdit(JobsPanner $position): View
    {
        return view('cms.jobs.positions.form', [
            'position' => $position,
            'categories' => Jobcategory::query()->orderBy('name_ar')->get(),
        ]);
    }

    public function positionsUpdate(Request $request, JobsPanner $position): RedirectResponse
    {
        $position->update($this->validatedPosition($request));

        return redirect()->route('cp.jobs.positions.index')->with('success', __('تم التحديث.'));
    }

    public function positionsDestroy(JobsPanner $position): RedirectResponse
    {
        $position->delete();

        return redirect()->route('cp.jobs.positions.index')->with('success', __('تم الحذف.'));
    }

    private function validatedPosition(Request $request): array
    {
        return $request->validate([
            'jobcategory' => ['required', 'exists:jobcategories,id'],
            'name_ar' => ['nullable', 'string', 'max:255'],
            'name_en' => ['nullable', 'string', 'max:255'],
            'location_ar' => ['nullable', 'string', 'max:255'],
            'location_en' => ['nullable', 'string', 'max:255'],
            'description_ar' => ['nullable', 'string'],
            'description_en' => ['nullable', 'string'],
            'requirements_ar' => ['nullable', 'string'],
            'requirements_en' => ['nullable', 'string'],
            'salary_ar' => ['nullable', 'string', 'max:255'],
            'salary_en' => ['nullable', 'string', 'max:255'],
            'type_ar' => ['nullable', 'string', 'max:255'],
            'type_en' => ['nullable', 'string', 'max:255'],
            'experience_ar' => ['nullable', 'string', 'max:255'],
            'experience_en' => ['nullable', 'string', 'max:255'],
        ]);
    }
}
