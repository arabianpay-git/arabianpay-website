<?php

namespace App\Livewire\Home;

use App\Models\HeroHomeMain;
use Livewire\Component;

class HomePanner extends Component
{
    // store one hero record
    public $hero;

    public function mount()
    {
        // get the first record; change to ->latest()->first() or find(id) if you prefer a specific record
        $this->hero = HeroHomeMain::first();
    }

    public function render()
    {
        return view('livewire.home.home-panner', [
            'hero' => $this->hero,
        ]);
    }
}
