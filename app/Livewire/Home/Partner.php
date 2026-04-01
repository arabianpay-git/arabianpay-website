<?php

namespace App\Livewire\Home;

use App\Models\HomePannerPartner;
use Livewire\Component;

class Partner extends Component
{
    // store one hero record
    public $hero;

    public function mount()
    {
        // get the first record; change to ->latest()->first() or find(id) if you prefer a specific record
        $this->hero = HomePannerPartner::first();
    }

    public function render()
    {
        return view('livewire.home.partner', [
            'hero' => $this->hero,
        ]);
    }
}
