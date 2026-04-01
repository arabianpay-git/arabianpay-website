<?php

namespace App\Livewire\Terms;

use App\Models\Codition;
use Illuminate\View\View;
use Livewire\Component;

class TermsHero extends Component
{
    public function render(): View
    {
        $lang = app()->getLocale();
        $condition = Codition::query()->first();
        $cards = is_array($condition?->jsoning_hero) ? $condition->jsoning_hero : [];

        return view('livewire.terms.terms-hero', [
            'condition' => $condition,
            'cards' => $cards,
            'lang' => $lang,
        ]);
    }
}
