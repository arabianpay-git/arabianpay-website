<?php

namespace App\Livewire\Supplier;

use App\Models\SuplierPanner;
use Livewire\Component;

class ThreePanner extends Component
{
    public $hero;

    public function mount(): void
    {
        // reuse the same panner record for extended sections
        $this->hero = SuplierPanner::first();
    }

    public function render()
    {
        return view('livewire.supplier.three-panner', [
            'hero' => $this->hero,
        ]);
    }
}

