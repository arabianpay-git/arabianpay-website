<?php

namespace App\Livewire\Support;

use App\Models\SupportCategory;
use App\Models\SupportUs;
use Illuminate\View\View;
use Livewire\Component;

class SupportContent extends Component
{
    public function render(): View
    {
        $lang = app()->getLocale();

        $content = SupportUs::query()->first();
        $categories = SupportCategory::query()->get();
        $items = is_array($content?->jsoning) ? $content->jsoning : [];

        return view('livewire.support.support-content', [
            'content' => $content,
            'categories' => $categories,
            'items' => $items,
            'lang' => $lang,
        ]);
    }
}
