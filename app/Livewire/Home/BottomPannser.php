<?php

namespace App\Livewire\Home;

use App\Models\HomeBottomPanner;
use Livewire\Component;

class BottomPannser extends Component
{
    // store one hero record
    public $hero;

    public function mount()
    {
        // get the first record; change to ->latest()->first() or find(id) if you prefer a specific record
        $this->hero = HomeBottomPanner::first();
    }

    public function render()
    {
        return view('livewire.home.bottom-pannser', [
            'hero' => $this->hero,
        ]);
    }
}
