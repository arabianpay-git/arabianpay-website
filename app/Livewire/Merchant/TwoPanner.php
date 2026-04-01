<?php

namespace App\Livewire\Merchant;

use App\Models\Merchant;
use Livewire\Component;

class TwoPanner extends Component
{
    public $hero;

    public function mount(): void
    {
        $this->hero = Merchant::first();
    }

    public function render()
    {
        return view('livewire.merchant.two-panner', [
            'hero' => $this->hero,
        ]);
    }
}

