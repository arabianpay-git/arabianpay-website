<?php

namespace App\Livewire\Supplier;

use App\Models\SuplierBottomPanner;
use Livewire\Component;

class BottomPanner extends Component
{
    public $hero;

    public function mount(): void
    {
        $this->hero = SuplierBottomPanner::first();
    }

    public function render()
    {
        return view('livewire.supplier.bottom-panner', [
            'hero' => $this->hero,
        ]);
    }
}

