<?php

namespace App\Livewire\Privacy;

use App\Models\Polices;
use Illuminate\View\View;
use Livewire\Component;

class PrivacyContent extends Component
{
    public $polices;

    public function mount()
    {
        $this->polices = Polices::query()->first();
    }

    public function render(): View
    {
        $lang = app()->getLocale();
        $sections = is_array($this->polices?->jsoning_content) ? $this->polices->jsoning_content : [];

        return view('livewire.privacy.privacy-content', [
            'polices' => $this->polices,
            'sections' => $sections,
            'lang' => $lang,
        ]);
    }
}
