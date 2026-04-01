<?php

namespace App\Livewire\About;

use App\Models\AboutUsMap;
use Illuminate\View\View;
use Livewire\Component;

class AboutMap extends Component
{
    public function render(): View
    {
        $lang = app()->getLocale();

        $map = AboutUsMap::query()->first();
        $stats = is_array($map?->jsoning) ? $map->jsoning : [];

        return view('livewire.aboute.about-map', [
            'map' => $map,
            'stats' => $stats,
            'lang' => $lang,
        ]);
    }
}

