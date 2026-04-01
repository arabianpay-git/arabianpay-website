<?php

namespace App\Livewire\Home;

use App\Models\HomepannerMarketting;
use Livewire\Component;

class WhyPanner extends Component
{
    // store one hero record
    public $hero;

    public function mount()
    {
        $this->hero = HomepannerMarketting::first();
    }

    public function render()
    {
        return view('livewire.home.why-panner', [
            'hero' => $this->hero,
        ]);
    }
}
