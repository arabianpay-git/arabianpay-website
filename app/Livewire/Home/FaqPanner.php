<?php

namespace App\Livewire\Home;

use App\Models\HomePannerQA;
use Livewire\Component;

class FaqPanner extends Component
{
    // store one hero record
    public $hero;

    public function mount()
    {
        // get the first record; change to ->latest()->first() or find(id) if you prefer a specific record
        $this->hero = HomePannerQA::first();
    }

    public function render()
    {
        return view('livewire.home.faq-panner', [
            'hero' => $this->hero,
        ]);
    }
}
