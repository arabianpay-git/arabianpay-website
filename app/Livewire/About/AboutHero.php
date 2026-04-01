<?php

namespace App\Livewire\About;

use App\Models\AboutUsPannerMarketting;
use App\Models\AboutUsTestMintional;
use Illuminate\View\View;
use Livewire\Component;

class AboutHero extends Component
{
    public function render(): View
    {
        $lang = app()->getLocale();

        $panner = AboutUsPannerMarketting::query()->first();
        $testimonials = AboutUsTestMintional::query()->first();
        $allItems = is_array($testimonials?->jsoning) ? $testimonials->jsoning : [];
        // أول 3 عناصر هي بطاقات hero
        $cards = array_slice($allItems, 0, 3);

        return view('livewire.aboute.about-hero', [
            'panner' => $panner,
            'cards' => $cards,
            'lang' => $lang,
        ]);
    }
}

