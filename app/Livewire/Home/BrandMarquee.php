<?php

namespace App\Livewire\Home;

use App\Models\Customer;
use Livewire\Component;

class BrandMarquee extends Component
{
    public function render()
    {
        return view('livewire.home.brand-marquee', [
            'brands' => Customer::query()->orderBy('id')->get(),
        ]);
    }
}
