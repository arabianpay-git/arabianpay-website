<?php

namespace App\Livewire\Merchant;

use App\Models\MerchantMotivationPanner;
use Livewire\Component;

class ThreePanner extends Component
{
    public $hero;

    public function mount(): void
    {
        $this->hero = MerchantMotivationPanner::first();
    }

    public function render()
    {
        return view('livewire.merchant.three-panner', [
            'hero' => $this->hero,
        ]);
    }
}

