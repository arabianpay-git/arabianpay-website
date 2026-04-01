<?php

namespace App\Livewire\Merchant;

use App\Models\MerchantstepsPanner;
use Livewire\Component;

class FourPanner extends Component
{
    public $hero;

    public function mount(): void
    {
        $this->hero = MerchantstepsPanner::first();
    }

    public function render()
    {
        return view('livewire.merchant.four-panner', [
            'hero' => $this->hero,
        ]);
    }
}

