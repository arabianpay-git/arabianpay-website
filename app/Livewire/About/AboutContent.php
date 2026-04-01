<?php

namespace App\Livewire\About;

use App\Models\AboutUsTestMintional;
use Illuminate\View\View;
use Livewire\Component;

class AboutContent extends Component
{
    public function render(): View
    {
        $lang = app()->getLocale();
        $content = AboutUsTestMintional::query()->first();
        $items = is_array($content?->jsoning) ? $content->jsoning : [];

        return view('livewire.aboute.about-content', [
            'contentModel' => $content,
            'items' => $items,
            'lang' => $lang,
        ]);
    }
}

