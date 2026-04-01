<?php

namespace App\Livewire\Home;

use App\Models\FeturesPanner;
use Livewire\Component;

class MarkettingPanner extends Component
{
    // store one hero record
    public $hero;

    public function mount()
    {
        $this->hero = FeturesPanner::first();
    }

    public function render()
    {
        return view('livewire.home.marketting-panner', [
            'hero' => $this->hero,
        ]);
    }
}
