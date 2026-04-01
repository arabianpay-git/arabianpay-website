<?php

namespace App\Livewire\Jobs;

use Illuminate\View\View;
use Livewire\Component;

class JobsHero extends Component
{
    public function render(): View
    {
        $lang = app()->getLocale();

        return view('livewire.jobs.jobs-hero', [
            'lang' => $lang,
        ]);
    }
}
