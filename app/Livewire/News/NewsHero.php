<?php

namespace App\Livewire\News;

use Livewire\Component;
use Illuminate\View\View;

class NewsHero extends Component
{
    public function render(): View
    {
        $lang = app()->getLocale();

        return view('livewire.news.news-hero', [
            'lang' => $lang,
        ]);
    }
}
