<?php

namespace App\Livewire\Supplier;

use App\Models\Supliers;
use Livewire\Component;

class MainPanner extends Component
{
    public $hero;

    public function mount(): void
    {
        // grab first supplier hero record (adjust to latest()->first() if needed)
        $this->hero = Supliers::first();
    }

    public function render()
    {
        return view('livewire.supplier.main-panner', [
            'hero' => $this->hero,
        ]);
    }
}

