<?php

namespace App\Livewire\Jobs;

use App\Models\JobsPanner;
use Illuminate\View\View;
use Livewire\Component;

class JobDetail extends Component
{
    public $job;

    public function mount($id)
    {
        $this->job = JobsPanner::with('category')->find($id);
    }

    public function render(): View
    {
        $lang = app()->getLocale();

        return view('livewire.jobs.job-detail', [
            'job' => $this->job,
            'lang' => $lang,
        ]);
    }
}
