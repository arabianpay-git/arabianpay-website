<?php

namespace App\Livewire\Support;

use App\Models\SupportPanner;
use Illuminate\View\View;
use Livewire\Component;

class SupportHero extends Component
{
    public function render(): View
    {
        $lang = app()->getLocale();

        $panner = SupportPanner::query()->first();
        $cards = is_array($panner?->jsoning) ? $panner->jsoning : [];

        return view('livewire.support.support-hero', [
            'panner' => $panner,
            'cards' => $cards,
            'lang' => $lang,
        ]);
    }
}
