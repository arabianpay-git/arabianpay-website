<?php

namespace App\Livewire\Jobs;

use App\Models\Jobcategory;
use App\Models\JobsPanner;
use Illuminate\View\View;
use Livewire\Component;

class JobsContent extends Component
{
    public $selectedCategory = null;

    public function mount()
    {
        // Get category from URL query parameter
        $this->selectedCategory = request()->query('category');
    }

    public function render(): View
    {
        $lang = app()->getLocale();
        $categories = Jobcategory::all();
        
        $jobsQuery = JobsPanner::query()->with('category');
        
        if ($this->selectedCategory) {
            $jobsQuery->where('jobcategory', $this->selectedCategory);
        }
        
        $jobs = $jobsQuery->orderBy('created_at', 'desc')->get();

        return view('livewire.jobs.jobs-content', [
            'categories' => $categories,
            'jobs' => $jobs,
            'selectedCategory' => $this->selectedCategory,
            'lang' => $lang,
        ]);
    }
}
