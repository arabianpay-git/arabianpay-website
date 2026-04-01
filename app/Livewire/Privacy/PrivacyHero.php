<?php

namespace App\Livewire\Privacy;

use App\Models\Polices;
use Illuminate\View\View;
use Livewire\Component;

class PrivacyHero extends Component
{
    public $polices;

    public function mount()
    {
        $this->polices = Polices::query()->first();
    }

    public function render(): View
    {
        $lang = app()->getLocale();
        $cards = is_array($this->polices?->jsoning_hero) ? $this->polices->jsoning_hero : [];

        return view('livewire.privacy.privacy-hero', [
            'polices' => $this->polices,
            'cards' => $cards,
            'lang' => $lang,
        ]);
    }
}
