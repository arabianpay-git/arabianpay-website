<?php

namespace App\Livewire\Merchant;

use App\Models\Merchant;
use Livewire\Component;

class MainPanner extends Component
{
    public $hero;

    public function mount(): void
    {
        $this->hero = Merchant::first();
    }

    public function render()
    {
        return view('livewire.merchant.main-panner', [
            'hero' => $this->hero,
        ]);
    }
}

