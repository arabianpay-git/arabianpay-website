<?php

namespace App\Livewire\Supplier;

use App\Models\SuplierPanner;
use Livewire\Component;

class TwoPanner extends Component
{
    public $hero;

    public function mount(): void
    {
        $this->hero = SuplierPanner::first();
    }

    public function render()
    {
        return view('livewire.supplier.two-panner', [
            'hero' => $this->hero,
        ]);
    }
}

