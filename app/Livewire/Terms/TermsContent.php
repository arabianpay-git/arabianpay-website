<?php

namespace App\Livewire\Terms;

use App\Models\Codition;
use Illuminate\View\View;
use Livewire\Component;

class TermsContent extends Component
{
    public function render(): View
    {
        $lang = app()->getLocale();
        $condition = Codition::query()->first();
        $sections = is_array($condition?->jsoning_content) ? $condition->jsoning_content : [];

        return view('livewire.terms.terms-content', [
            'condition' => $condition,
            'sections' => $sections,
            'lang' => $lang,
        ]);
    }
}
